<?php
//zapne session
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard administrátora</title>
</head>
<body>

<?php

include("../include/header.php");
include("../include/connection.php");
?>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -30px;">
				<!--Sidenav -->
			<?php 
include("sidenav.php");
			 ?>
				<!-- Side nav-->
			</div>
			<div class="col-md-10">
				
<h4 class=my-5> Dashboard administrátora</h4>
				<div class="col-md-12 my-1">
					<div class="row">
						<div class="col-md-3 bg-success mx-2" style="height:130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<?php 
$ad=mysqli_query($connect,"SELECT * FROM admin");
$num = mysqli_num_rows($ad);
										 ?>
										<h5 class="my-2 text-white " style="font-size:30px;"><?php  echo $num; ?></h5>
										<h5 class="text-white">Celkem</h5>
										<h5 class="text-white">Admin</h5>
									</div>
									<div class="col-md-4">
										<a href="admin.php"><i class="fa fa-users-cog fa-2x my-4"style="color:white;" ></i></a>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-3 bg-info mx-2" style="height:130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<?php
$doctor = mysqli_query($connect , "SELECT * FROM doctors WHERE status = 'Approved'");

$num2 = mysqli_num_rows($doctor);


?>



										<h5 class="my-2 text-white " style="font-size:30px;">0</h5>
										<h5 class="text-white"><?php echo $num2; ?></h5>
										<h5 class="text-white">Doktor</h5>
									</div>
									<div class="col-md-4">
										<a href="doctor.php"><i class="fa fa-user-md fa-2x my-4"style="color:white;" ></i></a>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-3 bg-warning mx-2" style="height:130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<h5 class="my-2 text-white " style="font-size:30px;">0</h5>
										<h5 class="text-white">Celkem</h5>
										<h5 class="text-white">Pacient</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-procedures fa-2x my-4"style="color:white;" ></i></a>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-3 bg-danger mx-2 my-2" style="height:130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<h5 class="my-2 text-white " style="font-size:30px;">0</h5>
										<h5 class="text-white">Celkem</h5>
										<h5 class="text-white">Report</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-flag fa-2x my-4"style="color:white;" ></i></a>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-3 bg-warning mx-2 my-2" style="height:130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8" >
<?php
$job = mysqli_query($connect , "SELECT * FROM doctors WHERE status = 'Pending'");

$num1 = mysqli_num_rows($job);


?>


										<h5 class="my-2 text-white " style="font-size:30px;"><?php echo $num1; ?></h5>
										<h5 class="text-white">Celekm</h5>
										<h5 class="text-white">Žádost o zaměstnání</h5>
									</div>
									<div class="col-md-4">
										<a href="job_request.php"><i class="fa fa-book-open fa-2x my-4"style="color:white;" ></i></a>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-3 bg-success mx-2 my-2" style="height:130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<h5 class="my-2 text-white " style="font-size:30px;">0</h5>
										<h5 class="text-white">ToCelkemtal</h5>
										<h5 class="text-white">Income</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-money-check-alt fa-2x my-4"style="color:white;" ></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>