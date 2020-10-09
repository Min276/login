<!DOCTYPE html>
<html>
<head>
	<title>Log out</title>
</head>
<body>


<?php
 session_start();
 unset($_SESSION['auth']);
 unset($_SESSION['id']);
 header("location: index.php");
?>


</body>
</html>