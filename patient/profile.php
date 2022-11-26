<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient profile</title>
</head>
<body>
    
<?php

include("../include/header.php");
inlcude("../include/connetcion.php");


?>


<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-2" style="margin-left:-30px;">
<?php
include("sidenav.php");
$patient = $_SESSION['patient'];
$query = "SELECT *FROM patient WHERE username='$patient'";

$res = mysqli_query($connect,$query);
$row = mysqli_fetch_array($res);


?>

</div>
<div class=" col-md-10">

<div class="col-md-12">
    <div class="row">
    <div class="col-md-6">
<?php
    if(isset($_POST['upload'])){

        $img= $_FILES['img']['name'];
        if(empty($img)){


        }
        else{
$query = "UPDATE patient SET profile = '$img' WHERE ussername = '$patient'";
$res= mysqli_query($connect,$query);

if($res){
move_uploaded_file($_FILES['img']['tmp_name'],"img/$img");
}

        }
    }
?>


        <h5> MyProfile</h5>
<form method="POST" enctype="multipart/form-data">
   <?php
   echo " <img src='img/".$row['profile']."' class='col-md-12' style='height:250px;'>";


   ?>
<input type="file" name= "img" class="form-control my-2" >
<input type="submit" name= "upload" class="btn btn-info" value="Upload profile">

</form>

<table class="table table bordered">
    <tr>
        <th colspan="2" class="text-center">My Details</th>
    </tr>
    <tr>
        <td >Firstname</td>
        <td ><?php echo $row['firstname']; ?></td>
    </tr>
    <tr>
        <td >Suername</td>
        <td ><?php echo $row['surname']; ?></td>
    </tr>
    <tr>
        <td >Username</td>
        <td ><?php echo $row['username']; ?></td>
    </tr>
    <tr>
        <td >Email</td>
        <td ><?php echo $row['email']; ?></td>
    </tr>
    <tr>
        <td >Phone</td>
        <td ><?php echo $row['phone']; ?></td>
    </tr>
    <tr>
        <td >gender</td>
        <td ><?php echo $row['gender']; ?></td>
    </tr>
    <tr>
        <td >Country</td>
        <td ><?php echo $row['country']; ?></td>
    </tr>
    
</table>
    </div>
    <div class="col-md-6">
<h5 class="text center">Change Username</h5>
<?php

if(isset($_POST['update'])){

    $uname = $_POST['uname'];
if(empty($uname)){


}
else{
$query = "UPDATE patient SET username = '$uname' WHERE username='$patient'";
$res = mysqli_query($connect,$query);
if($res){
$_SESSION['patient'] = $uname;


}

}

}



?>
<form method="POST">
    <label for="">Enter Username</label>
    <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter username">
    <input type="submit" name="update" class="btn btn-info my-2" value="Update username">

</form>

<?php

if(isset($_POST['change'])){

    $old= $_POST['old_pass'];
    $new= $_POST['new_pass'];
    $con= $_POST['con_pass'];


$q = "SELECT * FROM patient WHERE username = '$patient'";
$re= mysqli_query($connect,$q);
$row = mysqli_fetch_array($re);
if(empty($old)){
    echo"<script> alert('Empty old passwor dplease enter old password')</script>";

}
else if(empty($new)){
    echo"<script> alert('empty new password please enter new password')</script>";   
}

else if($con !=$new){
    echo"<script> alert('Both password must be same')</script>";
}
else if($old!=$row['password']){
    echo"<script> alert('Invladi password')</script>";
}else{
$query = "UPDATE pateint SET password='$new' WHERE username='$patient'";
mysqli_query($connect,$query);

}

}




?>


<h5 class="my-4 text-center">Change Password</h5>
<form method="POST">

<label for=""> Old password</label>
<input type="password" name="pass" class="form-control"
 autocomplete="off" placeholder="enter old password">

 <label for=""> new password</label>
<input type="password" name="new_pass" class="form-control"
 autocomplete="off" placeholder="enter new password">

 <label for=""> confirm password</label>
<input type="password" name="con_pass" class="form-control"
 autocomplete="off" placeholder="enter confirmpassword">

 <input type="submit" name="change" class="btn btn-info" value="change password">
</form>

    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>