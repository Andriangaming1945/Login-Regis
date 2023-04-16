<?php
include "db_com.php";

if(isset($_POST['submit'])){

    $Nama = mysqli_real_escape_string($conn, $_POST['Nama']); 
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $select = " SELECT * FROM `email` WHERE email = '$email' && email = '$email' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user sudah ada!';

        
    }else{

        if($pass != $cpass){
            $error[] = 'email tidak solid!';
        }else{
            $insert = "INSERT INTO `email`(`id`, `email`, `Nama`) VALUES (DEFAULT,'$email','$Nama')";
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
      <h3>Email</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="Nama" required placeholder="Masukkan Nama mu">
      <input type="email" name="email" required placeholder="Masukkan Email mu">
      <input type="submit" name="submit" value="login now" class="form-btn">
      
   </form>

</div>

</body>
</html>
