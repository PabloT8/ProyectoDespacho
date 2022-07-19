<link rel="stylesheet" href="css/master.css?n=1">
<?php


$error = array();

$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "Olvidaste ingresar el usuario";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Olvidaste ingresar la contraseña";
}

if(empty($error)){
    // sql query
    $query = "SELECT userID, username, usertype, password FROM user WHERE username=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

    // Variable bind prevenir una inyeccion de sql
    mysqli_stmt_bind_param($q, 's', $username);
    //ejecucion consulta
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)){
        // Verifica si la contrasena coincide con la del usuario en la base de datos
        if(password_verify($password, $row['password'])){
           if($row["usertype"]=="admin") //Si concuerda y rol es admin redirige a este modulo
    {   

        $_SESSION["username"]=$username;

        header("location:../inicioad.php");
    }

    elseif($row["usertype"]=="despacho") // si concuerda y rol es despacho redirige a este modulo
    {

        $_SESSION["username"]=$username; 
        
        header("location:../inicio.php");
    }
        }
    }

}else{
    echo "Usted no esta registrado o no tiene permisos para acceder a esta pagina!";// mensaje en caso el usuario no exista o no cumple con el rol asignado en la base de datos
}



