<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
		<!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css
" rel="stylesheet" type="text/css" >


		
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-info bg-info">
<h5 class="text-white">Hospital mng system</h5>
<div class="mr-auto"></div>

<ul class´"">
<?php

if(isset($_SESSION['admin']))
{
	$user = $_SESSION['admin'];
echo '

	<li class="nav-item">
		<a href="" class="nav-link">'.$user.'</a>
	</li>
	<li class="nav-item">
		<a href="logout.php" class="nav-link">Logout</a>
	</li>
';


}else if(isset($_SESSION['doctor'])){
	$user = $_SESSION['doctor'];
	echo '
	
		<li class="nav-item">
			<a href="" class="nav-link">'.$user.'</a>
		</li>
		<li class="nav-item">
			<a href="logout.php" class="nav-link">Logout</a>
		</li>
	';
	
}else if(isset($_SESSION['patient'])){
	$user = $_SESSION['patient'];
	echo '
	
		<li class="nav-item">
			<a href="" class="nav-link">'.$user.'</a>
		</li>
		<li class="nav-item">
			<a href="logout.php" class="nav-link">Logout</a>
		</li>
	';
	
}
else{
echo '
<li class="nav-item">
		<a href="index.php" class="nav-link">Home</a>
	</li>
	<li class="nav-item">
		<a href="adminlogin.php" class="nav-link">Admin</a>
	</li>
	<li class="nav-item">
		<a href="doctorlogin.php" class="nav-link">Doctor</a>
	</li>
	<li class="nav-item">
		<a href="patientlogin.php" class="nav-link">Patient</a>
	</li>
';

}
?>
</ul>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
 
</body>
</html>