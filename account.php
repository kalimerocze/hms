<?php
include("include/connection.php");

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
$error['ac'] = "Enter firstname";

}
else if(empty($sname)){
    $error['ac'] = "Enter surname";
    
    }else if(empty($uname)){
        $error['ac'] = "Enter username";
        
    }else if(empty($email)){
        $error['ac'] = "Enter email";
        
        }else if(empty($phone)){
            $error['ac'] = "Enter phone";
            
            }
            else if(empty($gender)){
                $error['ac'] = "Enter gender";
                
                }else if(empty($country)){
                    $error['ac'] = "Enter country";
                    
                    }
                    else if(empty($password)){
                        $error['ac'] = "Enter password";
                        
                        }
                        else if($password!= $con_pass){
                            $error['ac'] = "passwords are not equal";
                            
                            }
                            else{
                               
                                
                            }


                            if(count($error)==0){
                               
                                $query="INSERT INTO patient(firstname,surname,username,email,phone,gender,country,password,data_reg,profile) VALUES('$fname','$sname','$uname','$email','$phone','$gender','$country','$password',now(),'patient.jpg') ";
                                $res = mysqli_query($connect,$query);
                                if($res){
                                    header("Location:patientlogin");

                                }else{
echo"<script> alert('failed')</script>";
                                    
                                }
                            }else{
                                echo"<script> alert('".$error['ac']."')</script>";
                                
                            }




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vytvo??it ????et pacienta</title>
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
    <h5 class="text-center text-info my-2">Vytvo??en?? ????tu pacient22a</h5>
<form method="POST">
<div class="form-group">
    <label for="">jm??no</label>
    <input type="text" name="fname" class="form-control" autocomplete="off"
    placeholder="enter firstname">
</div>
<div class="form-group">
    <label for="">P??ijmen??</label>
    <input type="text" name="sname" class="form-control" autocomplete="off"
    placeholder="enter surname">
</div>
<div class="form-group">
    <label for="">U??ivatelsk?? jm??no</label>
    <input type="text" name="uname" class="form-control" autocomplete="off"
    placeholder="enter username">
</div>
<div class="form-group">
    <label for="">E-mail</label>
    <input type="text" name="email" class="form-control" autocomplete="off"
    placeholder="enter email">
</div>
<div class="form-group">
    <label for="">Telefon</label>
    <input type="number" name="phone" class="form-control" autocomplete="off"
    placeholder="enter phone">
</div>
<div class="form-group">
    <label for="">Pohlav??</label>
    <select name="gender" class="form-control">
        <option value="">Zvolit pohlav??</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>
<div class="form-group">
    <label for="">Zem?? p??vodu</label>
    <select name="country" class="form-control">
        <option value="">Zvolit zemi p??vodu</option>
        <option value="France">France</option>
        <option value="Germany">Germany</option>
        <option value="England">England</option>

    </select>
</div>
<div class="form-group">
    <label for="">Heslo</label>
    <input type="password" name="pass" class="form-control" autocomplete="off"
    placeholder="enter password">
</div>
<div class="form-group">
    <label for="">Potvrzovac?? heslo</label>
    <input type="password" name="con_pass" class="form-control" autocomplete="off"
    placeholder="enter confirm password">
</div>
<input type="submit" name="create" value="Create account"
class="btn btn-info">

<p> M??te-li ji?? ????et<a href="patientlogin.php">klikn??te zde. </a></p>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
</div>
</body>
</html>