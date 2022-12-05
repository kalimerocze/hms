<?php
session_start();
include("include/connection.php");

if(isset($_POST['login'])){
$uname = $_POST['uname'];
$pass = $_POST['pass'];


if(empty($uname)){
    echo "<script>alert('enter username')</script>";
 
}
    else if(empty($pass)){
echo "<script>alert('enter password')</script>";
    }else{
$query = "SELECT * FROM patient WHERE username='$uname' and password='$pass'";
$res = mysqli_query($connect,$query);
if(mysqli_num_rows($res)==1){
header("Location:patient/index.php");
// nastav session pro pacienta
$_SESSION['patinet'] = $uname;
}   
else{
    echo "<script>alert('Invalid account')</script>";
} 
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stránka přihlášení pacienta</title>
</head>
<body style="background-image:url(img/back.jpg);">
<?php
include ("include/header.php");
?>    
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-3"></div>
<div class=" col-md-6 my-5 jumbotron">
<h5 class="text-center my-3"> Přihlášení pacienta</h5>
<form metho="POST">
    <div class="form-group">
        <label for=""> uživatelské jméno</label>
        <input type="text" name="uname" class="form-control" autocomplete="off" placeholder = "enter uname">


    </div>
    <div class="form-group">
        <label for=""> heslo</label>
        <input type="password" name="pass" 
        class="form-control" autocomplete="off" 
        placeholder = "enter pass">
    </div>
<input type="submit" name="login" class="btn btn-info my-3" 
value = "login">
<p>Nemáte-li účet <a href="account.php">klikněte zde.</a></p>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
</div>

</body>
</html>