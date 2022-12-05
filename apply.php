<?php
include("include/connection.php");

if(isset($_POST['apply'])){
$firstname = $_POST['fname'];
$surname = $_POST['sname'];
$username = $_POST['uname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$password = $_POST['pass'];
$confirm_password = $_POST['con_pass'];

$error= array();
if(empty($firstname)){
$error['apply']="emter firstname";

}else if(empty($surname)){
    $error['apply']="emter surname";

}else if(empty($username)){
    $error['apply']="emter username";

}else if(empty($email)){
    $error['apply']="emter email";

}else if($gender==""){
    $error['apply']="select gender";

}else if(empty($phone)){
    $error['apply']="emter phone";

}else if($country==""){
    $error['apply']="select country";

}else if(empty($password)){
    $error['apply']="emter password";

}else if($confirm_password!=$password){
    $error['apply']="both password do not match";

}

if(count($error)==0){

$query = "INSERT INTO doctors (firstname,surname,username,email,gender,phone,country,password,salary,data_reg,status,profile) VALUES ('$firstname','$surname','$username','$email','$gender','$phone','$country','$password','0',now(),'Pending','doctor.jpg')";
$result = mysqli_query($connect,$query);


if($result){

    echo "<script> alert('You have successfully applied') </script>";
header("Location:doctorlogin.php");
}else{
    echo "<script> alert('failed') </script>";

}

}







}

if(isset($error['apply'])){
$s=$error['apply'];
   
$show="<h5 class='text-center alert alert-danger'>$s</h5>";
}else{
$show="";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Žádost o účet</title>
</head>
<body style="background-image:url(img/back.jpg);background-size:cover;background-repeat:no-repeat;">
   <?php
   include("include/header.php");
   ?>

   <div class="container-fluid">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-3 jumbotron">
        <h5 class="text-center">Zažádat</h5>
<div>
    <?php
    echo $show;
    
    ?>
</div>
        <form method="post">
<div class="form-group">
    <label for="">Jméno</label>
    <input type="text" value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>" name="fname" class="form-control" autocomplete="off"> placeholder="enter name"
</div>
<div class="form-group">
    <label for="">Přijmení</label>
    <input type="text" value="<?php if(isset($_POST['sname'])) echo $_POST['sname'];?>" name="sname" class="form-control" autocomplete="off"> placeholder="enter surname"
</div>
<div class="form-group">
    <label for="">uživatelské jméno</label>
    <input type="text" name="uname" value="<?php if(isset($_POST['uname'])) echo $_POST['uname'];?>" class="form-control" autocomplete="off"> placeholder="enter name"
</div>
<div class="form-group">
    <label for="">E-mail</label>
    <input type="text" name="email" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" autocomplete="off"> placeholder="enter name"
</div>
<div class="form-group">
    <label for="">Pohlaví</label>
    <select name="gender" class="form-control">
        <option value="">Select gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>
<div class="form-group">
    <label for="">Telefon</label>
    <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Zadejte telefon"> 
</div>
<div class="form-group">
    <label for="">Země původu</label>
    <select name="country" class="form-control">
        <option value="">Zvolte zemi původu</option>
        <option value="France">France</option>
        <option value="India">India</option>
        <option value="Ghana">Ghana</option>
    </select>
</div>
<div class="form-group">
    <label for="">Heslo</label>
    <input type="password" name="pass" class="form-control" autocomplete="off"placeholder="Zadejte heslo"> 
</div>
<div class="form-group">
    <label for="">confirm password</label>
    <input type="password" name="con_pass" class="form-control" autocomplete="off"placeholder="Potvrdte heslo"> 
</div>

<input type="submit" name="apply" value="apply" clas="btn btn-success">
<p> Máte-li již účet<a href="doctorlogin.php">klikněte zde.</a></p>
        </form>
    </div>
    <div class="col-md-3"></div>
    </div>
    </div>
   </div>
</body>
</html>