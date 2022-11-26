<?php
session_start();
// nehlasi chyby
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>doctors profile page</title>
</head>
<body>
    

<?php
include("../include/header.php");
include("../include/connection.php");

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
<div class="col-md-12">
<div class="row">
<div class="col-md-6">
    
<?php
$doc = $_SESSION['doctor'];
$query= "SELECT * FROM doctors WHERE username='$doc'";
$res = mysqli_query($connect,$query);
$row = mysqli_fetch_array($res);


if(isset($_POST['upload'])){
$img = $_FILES['img']['name'];
if(empty($img)){

}else{
    $query = "UPDATE doctors SET profile ='$img' WHERE username='$doc'";
    $res = mysqli_query($connect,$query);
    if($res){
        move_uploaded_file($_FILES['img']['tmp_name'],"img/$img");

    }
}

}

?>
<form method="POST" enctype = "multipart/form-data">
<?php
echo "    <img src='img".$row['profile']."' style='height:250px;' class='col-md-12 my-3' alt=''>
";
?>
<input type="file" name="img" class="form-control my-1">
<input type="submit" name="upload" class="btn btn-success" value="upload image">

</form>
<div class="my-3">
<table class="table table-bordered">
<tr>
    <th  colspan="2"class="text-center"> Details</th>

</tr>
<tr>
    <td class="text-center"> firstname</td>
    <td class="text-center"> <?php echo $row['firstname']; ?></td>

</tr>
<tr>
    <td class="text-center"> surname</td>
    <td class="text-center"> <?php echo $row['surname']; ?></td>

</tr>
<tr>
    <td class="text-center"> username</td>
    <td class="text-center"> <?php echo $row['username']; ?></td>

</tr>
<tr>
    <td class="text-center"> Email</td>
    <td class="text-center"> <?php echo $row['email']; ?></td>

</tr>
<tr>
    <td class="text-center"> Phone number</td>
    <td class="text-center"> <?php echo $row['phone']; ?></td>

</tr>
<tr>
    <td class="text-center"> Gender</td>
    <td class="text-center"> <?php echo $row['gender']; ?></td>

</tr>
<tr>
    <td class="text-center"> Country</td>
    <td class="text-center"> <?php echo $row['country']; ?></td>

</tr>
<tr>
    <td class="text-center"> Salary</td>
    <td class="text-center"> <?php echo $row['salary']; ?></td>

</tr>



</table>
</div>

    </div>
    <div class="col-md-6">
    <h5 class="text-center my-2">Update Username</h5>
    <?php
    
    if(isset($_POST['change_uname'])){
$uname=$_POST['uname'];
if(empty($uname)){

}else{

    $query = "UPDATE doctors SET username = '$uname' WHERE username='$doc'";
    $res = mysqli_query($connect,$query);
    if($res){
$_SESSION['doctor'] = $uname;

    }
}

    }
    ?>
    <form method="POST">
        <label for=""> Update username</label>
        <input type="text" name="uname" class="form-control" 
        autocomplete="off" placeholder="enter username">
        <br>
        <input type="submit" name="change_uname" class="btn btn-success" value="change usename">
 
 
    </form>
    <br><br>

    <h5 class="text-center my-2"> change password</h5>
    <?php
    
    if(isset($_POST['change_pass'])){
        $old=$_POST['old_pass'];
        $new=$_POST['new_pass'];
        $con=$_POST['con_pass'];

        $ol = "SELECT * FROM doctors where username = '$doc'";

        $ols = mysqli_query($connect,$ol);
        $row = mysqli_fetch_array($ols);

if($old!=$row['password']){

}else if(empty($new)){


    }
}else if($con != $new){


}else{
$qeury = "UPDATE doctors SET password = '$new' WHERE username='$doc'";
mysqli_query($connect,$query);

}

    }
    ?>

    <form method="POST">
        <div class="form-group">

            <label for=""> old password</label>
            <input type="password" name="old_pass" class="form-control" 
            autocomplete="off" placeholder="enter old password">
            <br>
        </div>
        <div class="form-group">

<label for=""> new password</label>
<input type="password" name="newd_pass" class="form-control" 
autocomplete="off" placeholder="enter old password">
<br>
</div>
<div class="form-group">

<label for=""> Confirm password</label>
<input type="password" name="con_pass" class="form-control" 
autocomplete="off" placeholder="enter confirm password">
<br>
</div>
        <input type="submit" name="change_pass" class="btn btn-success"> valueé"change usename"
 
    </form>
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