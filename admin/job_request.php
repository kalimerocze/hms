<?php
//zapne session
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Žádost o zaměstnání</title>
</head>
<body>
<?php //zapne session
include '../include/header.php'; 
?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2"style="margin-left:-30px;">
                <?php //zapne session
                    include 'sidenav.php'; 
                ?>
            </div>
            <div class="col-md-12">
                <h5 class="text-center my">Žádost o zaměstnání</h5>
                <div id="show"></div>
            </div>
        </div>
    </div>
</div>

<script>
        $(document).ready(function(){
show();
            function show(){
                $.ajax({
                    url:"ajax_job_request.php",
                    method:"POST",
                    success:function(data){
                        $('#show').html(data);
                    }
                });
            }

            $(document).on('click','.approve',function(){

                var id = $(this).attr("id");
                alert(id);

                $.ajax({
                    url:"ajax_approve.php",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                        show();
                    }

                })    
            });
            $(document).on('click','.reject',function(){
                $.ajax({
                    url:"ajax_reject.php",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                        show();
                    }

                })    
            
            });

        });
    </script>

</body>
</html>
