<link rel="stylesheet" href="css/master.css?n=1">
<?php

session_start();
// header.php
include ('header.php');
include "helper.php";
?>
 
<?php
    $user = array();
    require ('mysqli_connect.php');

    if(isset($_SESSION['userID'])){
        $user = get_user_info($con, $_SESSION['userID']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('login-process.php');
    }
?>

<!-- registration area -->
<section id="login-form">
    <div class="row m-0">
        <div class="col-lg-8 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Login</h1>
                
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <img src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/perfi.png' ; ?>" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="username" required name="username" id="username" class="form-control" placeholder="Nombre de Usuario*">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="Contraseña*">
                        </div>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Ingresar</button>
                    </div>
                    
<br>
<br>

                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    
</section>
<!-- #registration area -->


 
<?php
// footer.php
include ('footer.php');
?>