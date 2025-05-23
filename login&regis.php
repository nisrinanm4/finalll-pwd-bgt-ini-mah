<?php
include 'koneksi.php';
session_start();

$reg_message = [];
$log_message = [];

if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass =  $_POST["password"];
    $cpass = $_POST['cpassword'];
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;

    // cek apakah email sudah terdaftar
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $reg_message[] = 'User already exists!';
    } else {
        // cek apakah password dan konfirmasi password cocok
        if ($pass != $cpass) {
            $reg_message[] = 'Confirm password not matched!';
        } elseif ($image_size > 2000000) { 
            $reg_message[] = 'Image size is too large!';
        } else {
            // Simpan password tanpa hash
            $plain_pass = mysqli_real_escape_string($conn, $pass);

            $insert = mysqli_query($conn, "INSERT INTO `user_form` (name, gender, email, password, image) VALUES ('$name', '$gender', '$email', '$plain_pass', '$image')") or die('Query insert gagal');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $reg_message[] = 'Registered successfully!';
            } else {
                $reg_message[] = 'Registration failed!';
            }
        }
    }
}

//proses login
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = $_POST['password']; 

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email'") or die(mysqli_error($conn));
    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        if($pass === $row['password']){ 
            $_SESSION['user_id'] = $row['id'];
            header('location:index.php');
            exit();
        }else{
            $log_message[] = 'incorrect email or password!';
        }
    } else {
        $log_message[] = 'incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <title>Regis & Login Form</title>
    <link rel="stylesheet" href="CSS/login&regis.css">
    
  </head>
  <body>
    <div class="navbar">
        <a href="index.php" class="logo">Code<span>Nest</span></a>
    </div>
    <br>
    <div class= "container">
    <div class="main">  	
      <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
          <?php
          if(isset($reg_message)){
            foreach($reg_message as $msg){
              echo '<div class = "message">'.$msg.'</div>';
            }
          }
          ?>
          <form action="" method="post" enctype="multipart/form-data" class="login-form">
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="name" placeholder="User name" required>
            <input type="text" name="gender" placeholder="Gender (male/female)" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" required>
            <input type="file" name="image" id="image" accept="image/jpeg, image/png, image/jpg" >
            <button type="submit" name="register">Sign up</button>
          </form>
        </div>

        <div class="login">
          <?php
          if(isset($log_message)){
            foreach($log_message as $msg){
              echo '<div class = "message">'.$msg.'</div>';
            }
          }
          ?>
          <form action="" method="post" class="login-form" novalidate>
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="submit" name="login">Login</button>
          </form>
        </div>
    </div>
    </div>
  </body>
</html>