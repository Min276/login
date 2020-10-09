
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="login.php" method="get">
 <label for="email">Email (or) User ID</label><br>
 <input type="text" name="email" id="email"><br>
 <label for="password">Password</label><br>
 <input type="password" name="password" id="password"><br><br>
 <input type="submit" value="Login"> 
</form>
</body>
</html>
 -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <?php
 session_start();
 $auth = isset($_SESSION['auth']);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Home Page</title>
 <style>
 body {
 background: #efefef;
 font-family: arial;
 color: #333;
 }
 
 button{
 margin-bottom: 14px;
 }
 #wrap {
 width: 500px;
 padding: 20px;
 margin: 10px auto;
 border: 4px solid #ddd;
 background: #fff;
 }
 h1 {
 margin: 0 0 20px 0;
 padding: 0 0 10px 0;
 border-bottom: 1px solid #ddd;
 }
 input[type=text], input[type=password] {
  display: block;
    margin-bottom: 14px;
    padding-bottom: 9px;
     }
 .msg {
 width: 500px;
 background: #ffd;
 border: 2px solid #dda;
 text-align: center;
 margin: 10px auto;
 font-size: 13px;
 padding: 6px;
 }
 </style>
</head> 
<body>
<div id="wrap">
 <?php if($auth) { ?>
 <h1>Welcome to My Website</h1>
 <p>You see this because you are an authenticated user. Congratulations!</p>
 <h1>My CV Example</h1>
    <p>Open a PDF file <a href="p info/Min Khant Kyaw.pdf">MinKhant's CV</a></p>
 <b><?php echo $_SESSION['id'] ?></b>
 <a href="logout.php"><i class="fa fa-fw fa-sign-out" style="font-size:20px;color:black"></i>Logout</a>
 <?php } else { ?>
 <h1>You need to login</h1>
 <form action="login.php" method="post">
 <label for="id">User ID</label>
 <!-- <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text">@</div>
    </div> -->
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
    <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-user-circle" style="font-size:20px;color:black"></i></button>
  
 <input type="text" name="id" id="id" >
</div>

 <label for="password" style="
 width: 100%;
 margin-bottom: 0px;
 ">Password</label>
     <div class="input-group mb-3">
  <div class="input-group-prepend">
    <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
    <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-lock" style="font-size:20px;color:black"></i></button>

 <input type="password" name="password" id="password" >
</div>
 <br>
 <button  onclick="return doValidate();" type="submit" class="btn btn-outline-primary" value="Login" style="    width: 45%;
    margin-bottom: -6px;
    margin-top: 30px;
"><i class="fa fa-fw fa-sign-in" style="font-size:20px;color:black"></i>Login</button>
 <!-- <input type="submit" value="Login"> -->
 </form>
 <?php } ?>
</div>
<script>
function doValidate() {
    console.log('Validating...');
    try {
        addr = document.getElementById('id').value;
        pw = document.getElementById('password').value;
        console.log("Validating addr="+addr+" pw="+pw);
        if (addr == null || addr == "" || pw == null || pw == "") {
            alert("Both fields must be filled out");
            return false;
        }
        if ( addr.indexOf('@') == -1 ) {
            alert("Invalid email address");
            return false;
        }
        return true;
    } catch(e) {
        return false;
    }
    return false;
}
</script>
</body>
</html> 
