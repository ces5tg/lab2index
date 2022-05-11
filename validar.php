<?php
 $xc = mysqli_connect("localhost", 'root', '', 'elcurioso', '3308');

  $email=$_POST['email'];
  $pass=$_POST['password'];



  $sql = "SELECT count(*) FROM usuarios WHERE email='$email' AND password='$pass'";

  $res=mysqli_query($xc , $sql);

  $filas=mysqli_fetch_array($res);  

  $cant=$filas[0];



	if($cant>0){
    session_start();
    $_SESSION['email_sesion']=$email;
		header("Location:principal.php");
  }
	else
		header("Location:index.php");


?>
