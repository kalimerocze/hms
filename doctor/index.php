
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>doctors dashboard</title>
</head>
<body>
    <?php
    include("../include/header.php");
    ?>

    <div class="container-fluid">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-2" style="margin-left:-30px;">
<?php 
 include("sidenav.php");

?>

    </div>
    <div class="col-md-10">
<div class="container-fluid">
    <h5>Doctors dashboard</h5>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3 bg-info mx-2" style="height:150px;">
<div class="col-md-12">
    <div class="row">
    <div class="col-md-8">
<h5 class="text-white text-center"> my profile</h5>

    </div>
    <div class="col-md-4">
<a href="profile.php"><i class="fa fa-user-circle fa-3x my-4" style="color:white;"></i> 
</a>
    </div>
    </div>
</div>
            </div>
            <div class="col-md-3 bg-warning mx-2" style="height:150px;">
<div class="col-md-12">
    <div class="row">
    <div class="col-md-8">
    <h5 class="text-white my-2" style="font-size:30px;"> 0</h5>
    <h5 class="text-white "> total</h5>
<h5 class="text-white "> patient</h5>

    </div>
    <div class="col-md-4">
<a href="#"><i class="fa fa-user-procedures fa-3x my-4" style="color:white;"></i> 
</a>
    </div>
    </div>
</div>
            </div>

            <div class="col-md-3 bg-success mx-2" style="height:150px;">
<div class="col-md-12">
    <div class="row">
    <div class="col-md-8">
    <h5 class="text-white my-2" style="font-size:30px;"> 0</h5>
    <h5 class="text-white text-center"> total</h5>
    <h5 class="text-white text-center"> Appointment</h5>

    </div>
    <div class="col-md-4">
<a href="#"><i class="fa fa-user-calendar fa-3x my-4" style="color:white;"></i> 
</a>
    </div>
    </div>
</div>
            </div>
        </div>
    </div> </div>

    </div>
    </div>
    </div>
    </div>
</body>
</html>