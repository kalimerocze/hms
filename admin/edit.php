<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upravit profil doktora</title>
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
    <h5 class="text-center">Upravit profil doktora</h5>

    <?php
    if(isse($_GET['id'])){

        $id = $_GET['id'];
        $query="SELECT * FROM doctors WHERE id='$id'";
        $res = mysqli_query($connect,$query);

        $row = mysqli_fetch_array($res);


    }
    
    ?>

    <div class="row">
        <div class="col-md-8">
            <h5 class="text-center"> Detaily lékaře </h5>
            <h5 class="my-3"> ID : <?php  echo $row['id']; ?></h5>
            <h5 class="my-3"> Jméno : <?php  echo $row['firstname']; ?></h5>
            <h5 class="my-3"> Přijmení : <?php  echo $row['surname']; ?></h5>
            <h5 class="my-3"> Email : <?php  echo $row['email']; ?></h5>
            <h5 class="my-3"> Telefon : <?php  echo $row['phone']; ?></h5>
            <h5 class="my-3"> Pohlaví : <?php  echo $row['gender']; ?></h5>
            <h5 class="my-3"> Země původu : <?php  echo $row['country']; ?></h5>
            <h5 class="my-3"> Datum registrace : <?php  echo $row['data_reg']; ?></h5>
            <h5 class="my-3"> Plat : <?php  echo $row['salary']; ?></h5>
<form method="POST">
    <label for="">Vložit plat doktora</label>
    <input type="number" name="salary" class="form-control" autocomplete="off" value="<?php echo $row['salary'];?>" placeholder="Vložit plat doktora">
<input type="submit" name="update"  class="btn btn-info my-3" value="Aktualizovat plat doktora">
</form>
        </div>
 <div class="col-md-4">
    <h5 class="text-center"> Aktualizovat plat</h5>
 </div>   </div>
</div>
    </div>
    </div>
</div>
</body>
</html>