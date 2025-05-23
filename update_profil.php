<?php
include 'koneksi.php';
session_start();

// Cek apakah session email sudah ada (user sudah login)
if (!isset($_SESSION['user_id'])) {
    header("Location: login&regis.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$del_message = [];
$profil_message = [];
$pw_message = [];
$image_message = [];
$gender_message = [];

// Ambil data user dari database untuk ditampilkan di form
$select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
if(mysqli_num_rows($select) > 0){
    $fetch = mysqli_fetch_assoc($select);
} else {
    die('User not found');
}

// Proses hapus akun
if (isset($_POST['delete_account'])) {
    $delete = mysqli_query($conn, "DELETE FROM `user_form` WHERE id = '$user_id'") or die('query failed');

    if ($delete) {
        session_unset();
        session_destroy();
        header('Location: login&regis.php');
        exit;
    } else {
        $del_message[] = 'Failed to delete account!';
    }
}

// Proses update profil
if(isset($_POST['update_profil'])){
    $input_name = mysqli_real_escape_string($conn, $_POST['update_name']);
    $input_gender = mysqli_real_escape_string($conn, $_POST['update_gender']);

    // Ambil data lama
    $select_old = mysqli_query($conn, "SELECT name, gender FROM `user_form` WHERE id = '$user_id'") or die('query failed');
    $old_data = mysqli_fetch_assoc($select_old);

// Update username jika berbeda
if ($input_name !== $old_data['name']) {
        $update_name = mysqli_query($conn, "UPDATE `user_form` SET name = '$input_name' WHERE id = '$user_id'");
        if ($update_name) {
            $profil_message[] = 'Username updated successfully!';
        } else {
            $profil_message[] = 'Failed to update username!';
        }
    }

// Update gender jika berbeda
if ($input_gender !== $old_data['gender']) {
        $update_gender = mysqli_query($conn, "UPDATE `user_form` SET gender = '$input_gender' WHERE id = '$user_id'");
        if ($update_gender) {
            $gender_message[] = 'Gender updated successfully!';
        } else {
            $gender_message[] = 'Failed to update gender!';
        }
    }

//update password
$old_pass = $_POST['update_pass'];
$new_pass = $_POST['new_pass'];
$confirm_pass = $_POST['confirm_pass'];

//ambil pw lama
$select_old = mysqli_query($conn, "SELECT password FROM `user_form` WHERE id = '$user_id'") or die('query failed');
$row = mysqli_fetch_assoc($select_old);
$old_password_db = $row['password'];

// Update password jika diisi
if (!empty($old_pass) && !empty($new_pass) && !empty($confirm_pass)) {
    // Cek password lama sesuai dengan yang ada di database 
    if ($old_pass !== $old_password_db) {
        $pw_message[] = 'Old password not matched!';
    } elseif ($new_pass !== $confirm_pass) {
        $pw_message[] = 'Confirm password not matched!';
    } else {
        mysqli_query($conn, "UPDATE `user_form` SET password = '$new_pass' WHERE id = '$user_id'") or die('query failed');
        $pw_message[] = 'Password updated successfully!';
    }
}

    // Update gambar profil jika ada upload
    if(isset($_FILES['update_image']) && $_FILES['update_image']['name'] != ''){
        $update_image = $_FILES['update_image']['name'];
        $update_image_size = $_FILES['update_image']['size'];
        $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
        $update_image_folder = 'uploaded_img/'.$update_image;

        if($update_image_size > 2000000){
            $image_message[] = 'Image is too large!';
        } else {
            $update_image_query = mysqli_query($conn, "UPDATE user_form SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
            if($update_image_query){
                move_uploaded_file($update_image_tmp_name, $update_image_folder);
                $image_message[] = 'Image updated successfully!';
            }
        }

    }

    // Refresh data user setelah update
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($select) > 0){
        $fetch = mysqli_fetch_assoc($select);
    }
    
    $message = array_merge($del_message, $profil_message, $pw_message, $image_message, $gender_message);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update Profile</title>
    <link rel="stylesheet" href="CSS/updateeprofil.css" />
</head>
<body>
    <div class="update-profil">
        <div class="flex">
        <?php
        if(!empty($message)){
            foreach($message as $msg){
                echo '<p class="message">'.$msg.'</p>';
            }
        }
        ?>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
            if(!empty($fetch['image'])){
                echo '<img src="uploaded_img/'.$fetch['image'].'" alt="Profile Image">';
            } else {
                echo '<img src="images/default-avatar.png" alt="Default Avatar">';
            }
            ?>
            <div class="flex">
                <div class="input-group">
                    <span>Username:</span>
                    <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" placeholder="Enter new username" class="box" required />
                    <span>Gender (male/female):</span>
                    <input type="text" name="update_gender" value="<?php echo $fetch['gender']; ?>" placeholder="Enter new gender" class="box" required />
                    <span>Update your picture:</span>
                    <input type="file" name="update_image" value="<?php echo $fetch['image']; ?>"accept="image/jpeg, image/png" class="box" />
                </div>
                <div class="input-group">
                    <span>Old password:</span>
                    <input type="password" name="update_pass" value="<?php echo $fetch['password']; ?>" placeholder="Enter previous password" class="box" />
                    <span>New password:</span>
                    <input type="password" name="new_pass" placeholder="Enter new password" class="box" />
                    <span>Confirm password:</span>
                    <input type="password" name="confirm_pass" placeholder="Confirm new password" class="box" />
                </div>
            </div>
            <div class="flex">
            <input type="submit" value="Update Profile" name="update_profil" class="btn" />
            <input type="submit" value="Delete Account" name="delete_account" class="delete-btn" onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.');" />
            <a href="logout.php" class="delete-btn">Logout</a>
            <a href="index.php" class="delete-btn">Go Back</a>
            </div>
        </form>
    </div>
</body>
</html>
