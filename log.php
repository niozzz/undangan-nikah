<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once ('Admin/Api/koneksi.php');
 
// $email = $_POST['email'];
// $password = md5($_POST['password']);
 
// $login = mysqli_query($conn,"SELECT * FROM user WHERE email='$email' and password='$password'");
// $cek = mysqli_num_rows($login);

$usernameLogin = htmlspecialchars($_POST["email"]);
$passwordLogin = htmlspecialchars($_POST["password"]);

$queryUsername = "SELECT email FROM user WHERE email = '$usernameLogin'";
$resultUsername = mysqli_query($conn, $queryUsername);

if (!(mysqli_affected_rows($conn) > 0)){
	echo "<script>alert('Email Tidak dikenali!');
	document.location.href='Login.php';
	</script>";
	
	
}else{
	$queryPassword = "SELECT password FROM user WHERE email = '$usernameLogin'";

	$resultPassword = mysqli_query($conn, $queryPassword);
	$rowPassword = mysqli_fetch_assoc($resultPassword);

	if (password_verify($passwordLogin, $rowPassword['password'])){
		
		$_SESSION['email'] = $usernameLogin;
		$_SESSION['status'] = "login";
		echo "<script>
		document.location.href='Admin/index.php';
		</script>";
		
	}else{
		echo "<script>alert('Mau ngapain hayoo! :p');
		document.location.href='Login.php';
		</script>";
	}
}

 
// if($cek > 0){
// 	session_start();
// 	$_SESSION['email'] = $email;
// 	$_SESSION['status'] = "login";
// 	header("location:Admin/index.php");
// }else{
// 	header("location:Login.php");
// 	echo "<script>alert('Email atau Password Salah');history.go(-1);</script>";
// }
 
?>