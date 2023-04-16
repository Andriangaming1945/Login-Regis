<?php 
include "config.php";

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']); 
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $pass= md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $no_Telpon = md5($_POST['no_Telpon']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM `user_form` WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user sudah ada!';

        
    }else{

        if($pass != $cpass){
            $error[] = 'password tidak solid!';
        }else{
            $insert = "INSERT INTO `user_form`(`id`, `name`, `email`, `no_Telpon`, `password`, `cpassword`, `user_type`) VALUES (DEFAULT,'$name','$email', '$no_Telpon','$pass','$cpass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    }
};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="kaze.css">
</head>
<body>
    <div class="form-container">
        <form class="" method="post">
            <h3>Register</h3>
            <?php 
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            
            
            ?>
            <input type="text" name="name" required placeholder="Masukkan nama mu">
            <input type="number" name="no_Telpon" required placeholder="Masukkan nomor telepon mu"> 
            <input type="email" name="email" required placeholder="Masukkan email mu">
            <input type="text" name="password" required placeholder="Masukkan password mu">
            <input type="text" name="cpassword" required placeholder="konfirmasi password mu">
            <select name="user_type">
                <option value="user">user</option>
                
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>sudah ada akun? <a href="login.php">Login sekarang</a></p>
            
        </form>
    </div>
</body>
</html>
