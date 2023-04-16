<?php
include "db.php";

if(isset($_POST['submit'])){

    $password_kamu = mysqli_real_escape_string($conn, $_POST['password_kamu']); 
    $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);

    $select = " SELECT * FROM `password` WHERE tanggal_lahir = '$tanggal_lahir' && tanggal_lahir= '$tanggal_lahir' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user sudah ada!';

        
    }else{

        if($pass != $cpass){
            $error[] = 'email tidak solid!';
        }else{
            $insert = "INSERT INTO `password`(`id`, `password_kamu`, `tanggal_lahir`) VALUES (DEFAULT,'$password_kamu','$tanggal_lahir')";
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
   <title>Lupa</title>

   <link rel="stylesheet" href="kaze.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Password</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="password" name="password_kamu" required placeholder="Masukkan password mu">
      <input type="date" name="tanggal_lahir" required placeholder="Masukkan Tanggal lahir mu">
      <input type="submit" name="submit" value="login now" class="form-btn">
      
   </form>

</div>

</body>
</html>
