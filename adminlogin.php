<?php 
include("include/connection.php");

if(isset($_POST['login'])){
$username=$_POST['uname'];
$password = $_POST['pass'];
$error = array();
session_start();
if(empty($username)){
$error['admin']="Enter username";


}else if (empty($password)){
$error['admin']="Enter password";

}

if(count($error)==0)
{

	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($connect,$query);

	if(mysqli_num_rows($result)==1){
echo "<script> alert('You are logged in as an admin')</script>";
$_SESSION['admin'] = $username;
//navigace na admin/index.php
header("Location:admin/index.php");
	}
	else{
echo "<script> alert('Invalid username or password')</script>";

	}
}


}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Admin login page</title>
</head>
<body style="bacground-image:url(img/hospital.jpg)">
<?php
include("include/header.php")
?>
<div style="margin-top: 30px;"></div>
<div class="container"
>
<div class="col-md-12">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 jumbotron">
			<img src="img/admin.jpg" style="width:100px;"/>
			<form class="" method="post"> 

<div>
	<?php
if(isset($error['admin'])){

	$sh = $error['admin'];
	$show = "<h4 class='alert alert-danger'>$sh</h4>";
}else{
$show="";

}
echo $show;
	  ?>
</div>

				<div class="form-group">
					<label>Username</label>
				<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Eneter username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form.-control">
				</div>
				<input type="submit" name="login" class="btn btn-success" value="login">
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
	
</div>

	
</div>
	
</div>
</body>
</html>