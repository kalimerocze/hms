<?php
session_start();
include("include/connection.php");

if(isset($_POST['login'])){
$uname = $_POST['uname'];
$password = $_POST['pass'];
$error = array();

$q = "SELECT * FROM doctors WHERE username='$uname' AND password = '$password'" 
$qq = mysqli_query($connect,$q);

$row=mysqli_fetch_array($qq);


if(empty($uname)){

    $error['login']="enter username";
}else if(empty($password)){
    $error['login']="enetr password";


}else if($row['status']=='Pending'){
    $error['login']="pleasewait for admin to confirm your account password";

}else if($row['status']=='Rejected'){
    $error['login']="Your request was rejected";

}
if(count($error)==0){

    $query = "SELECT *FROM doctors WHERE username = '$uname'AND password='$password'";
    $res = mysqli_query($connect,$query);
if(mysqli_num_rows($res)){

    echo "<script>alert('done')</script>";
    $_SESSION['doctor'] = $uname;
    header("Location:doctor/index.php")
}
else{
    echo "<script>alert('Invalid account')</script>";


}


}
}

if(isset($error['login'])){

    $l= $error['login'];
    $show = "<h5 class='text-center alert alert-danger'>$l  </h5>"
}else{

   $show = ""; 
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body style="background-image:url(back.jpg);background-size:cover;background-repeat:no-repeat;">
   <?php
   include("include/header.php");
   ?> 
   <div class="container">
   <div class="col-md-12">
   <div class="row">
   <div class="col-md-3"></div>
   <div class="col-md-6 jumbotron my-2">
    <h5 class="text-center">doctors login</h5>
    <div> <?php
    echo $show;
    ?>
    </div>
    <form method="post">
    <div class="form-group">
        <label for=""> username</label>
        <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="enetr username">
    </div>
    <div class="form-group">
        <label for=""> password</label>
        <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="enetr username">
    </div>
    <input type="submit" name="login" class="btn btn-success" value="login">
    
<p> i dont have an account <a href="apply.php"> apply now</a></p>
</form>
   </div>
   <div class="col-md-3"></div>
   </div>
   </div>
   </div>
</body>
</html>