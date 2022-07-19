<link rel="stylesheet" href="css/master.css?n=1">
<?php
    // header.php
    include ('header.php');
?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('register-process.php');
        }
    ?>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon"  href="img/logo91.png">
    <title>Registro</title>


    <!-- registration area -->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Registrarse</h1>
                </div>
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            
                        </div>
                        <img src="./assets/profile/perfi.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['username'])) echo $_POST['username'];  ?>" name="username" id="username" class="form-control" placeholder="Usuario">
                            </div>

                            <div class="col">

                                <select type="text" value="<?php if(isset($_POST['usertype'])) echo $_POST['usertype'];  ?>" name="usertype" id="usertype" class="form-control" placeholder="Tipo de usuario">> 
                                   <option value="">Tipo de Usuario</option>
                                   <option value="despacho">Despacho </option>
                                   <option value="admin">Admin </option>
                                    </select>
                                      
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="password" id="password" class="form-control" placeholder="Contraseña*">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirmar Contraseña*">
                                <small id="confirm_error" class="text-danger"></small>
                            </div>
                        </div>

                  <!--       <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                        </div> -->

                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Registrarse</button>
                        </div>


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