<link rel="stylesheet" href="css/master.css?n=1">
<?php

require ('helper.php');
// error variable.
$error = array();

$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "Olvidaste ingresar tu nombre de usuario";
}

$usertype = validate_input_text($_POST['usertype']);
if (empty($usertype)){
    $error[] = "Olvidaste ingresar el tipo de usuario";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Olvidaste ingresar tu contraseña";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "Olvidaste confirmar tu contraseña";
}


if(empty($error)){
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO user (userID, username, usertype, password, registerDate )";
    $query .= "VALUES(' ', ?, ?, ?, NOW())";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sss', $username, $usertype, $hashed_pass);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

        // start a new session
        session_start();

        // create session variable
        $_SESSION['userID'] = mysqli_insert_id($con);

        header('location: ../views/usuarios.php');
        exit();
    }else{
        print "Error en el registro...!";
    }

}else{
    echo 'not validate';
}


















