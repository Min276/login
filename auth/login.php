<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<!-- ?php
$email = $_GET['email'];
$password = $_GET['password'];
if($email && $password)
 echo "Hello, you have provided <b>$email</b> as your login ID ",
 "and your password is <b>$password</b>.";
else
 echo "Login ID or password missing! ",
 "Please <a href='index.php'>try again</a>."; 
 ?>
 -->
 <?php
  session_start();
 $id = $_POST['id'];
 $password = $_POST['password'];
 if($id == "minkhantkyawttu@gmail.com" && $password == "Min30075ttu") {
 $_SESSION['auth'] = true;
 $_SESSION['id'] = "Admin";
 }
 header("location: index.php");
?> </body>
</html>
