<?php
include("include/conncetion.php");

if(isset($_POST['create'])){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $password = $_POST['pass'];
    $con_pass = $_POST['con_pass'];

$error = array();

if(empty($fname)){
$error=['ac'] = "Enter firstname";

}
else if(empty($sname)){
    $error=['ac'] = "Enter surname";
    
    }else if(empty($uname)){
        $error=['ac'] = "Enter username";
        
    }else if(empty($email)){
        $error=['ac'] = "Enter email";
        
        }else if(empty($phone)){
            $error=['ac'] = "Enter phone";
            
            }
            else if(empty($gender)){
                $error=['ac'] = "Enter gender";
                
                }else if(empty($country)){
                    $error=['ac'] = "Enter country";
                    
                    }
                    else if(empty($pass)){
                        $error=['ac'] = "Enter password";
                        
                        }
                        else if($pass!= $con_pass){
                            $error=['ac'] = "passwords are not equal";
                            
                            }
                            else{

                                
                            }


                            if(count($error)==0){

                                $query="INSERT INTO patient(firstname,suername,username,email,phone,gender,country,password,date_reg,profile) VALUES('$fname','$sname','$uname','$email','$phone','$gender','$country','$password',NOW(),'patient.jpg') ";
                                $res = mysqli_query($connect,$query);
                                if($res){
                                    header("Location:patientlogin");

                                }else{
echo"<script> alert('failed')</script>";
                                    
                                }
                            }




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create patient account</title>
</head>
<body style="backgrnoud-image:url(img/backjpg); background-repeat:no-repeat">
    <?php
include("include/header.php");

?>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 my-2 jumbotron">
    <h5 class="text-center text-info my-2">Create Account</h5>
<form method="POST">
<div class="form-group">
    <label for="">Firstname</label>
    <input type="text" name="fname" class="form-control" autocomplete="off"
    placeholder="enter firstname">
</div>
<div class="form-group">
    <label for="">Surname</label>
    <input type="text" name="sname" class="form-control" autocomplete="off"
    placeholder="enter surname">
</div>
<div class="form-group">
    <label for="">username</label>
    <input type="text" name="uname" class="form-control" autocomplete="off"
    placeholder="enter username">
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" class="form-control" autocomplete="off"
    placeholder="enter email">
</div>
<div class="form-group">
    <label for="">Phone</label>
    <input type="number" name="phone" class="form-control" autocomplete="off"
    placeholder="enter phone">
</div>
<div class="form-group">
    <label for="">Gender</label>
    <select name="gender" class="form-control">
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>
<div class="form-group">
    <label for="">Country</label>
    <select name="gender" class="form-control">
        <option value="">Select Gender</option>
        <option value="France">France</option>
        <option value="Germany">Germany</option>
        <option value="England">England</option>

    </select>
</div>
<div class="form-group">
    <label for="">password</label>
    <input type="password" name="pass" class="form-control" autocomplete="off"
    placeholder="enter password">
</div>
<div class="form-group">
    <label for="">confirm password</label>
    <input type="password" name="con_pass" class="form-control" autocomplete="off"
    placeholder="enter confirm password">
</div>
<input type="submit" name="create" value="Create account"
class="btn btn-info">

<p> i Already have an account<a hre="patientlogin.php">Click Here. </a></p>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
</div>
</body>
</html>