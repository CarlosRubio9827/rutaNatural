<?php
include "require/pdo.php";
$method = $_POST['method'];
if(@$method == "logout"){
    session_start(); 
    session_destroy();
    header('Location: ../app/auth/login.php');
}
else if(@$method == "check_nuip"){
   try{
    $nuip1 = $_POST['nuip'];
   
    $db = new PDO_Connect;
    $db->connect();
    $nuip = $db->getRow("SELECT * FROM usuarios WHERE numIdentificacion = ? ",array($nuip1));
   

    if(!$nuip){
        echo json_encode(array('existeNuip'=> true, 'status' => 200));
    }else {
        echo json_encode(array('existeNuip'=> false, 'status' => 200));
    }
} catch (Exception $e) {
    echo json_encode(array('existeTodo'=> $e->getMessage(), 'status' => 500));
}
    exit(0);
}
/* else if(@$method == "check_cod"){
    try{
        $cod = $_POST['cod'];
        $db = new PDO_Connect;
        $db->connect();
        $usuario = $db->getRow("SELECT * FROM codigosequipos WHERE codigo = ? ",array($cod));
        if($usuario){
            echo json_encode(array('existe'=> true, 'status' => 200));
        }else{
            echo json_encode(array('existe'=> false, 'status' => 200));
        }
    } catch (Exception $e) {
        echo json_encode(array('existe'=> $e->getMessage(), 'status' => 500));
    }
        exit(0);
}   */
else if(@$method == "register"){
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $email = $_POST['email'];
    $numeroIdentificacion = $_POST['numeroIdentificacion'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
   
    $db = new PDO_Connect;
    $db->connect();


    $res = $db->query("INSERT INTO usuarios (nombres, apellidos, correo, numIdentificacion, sexo, numeroCelular, facebook, instagram) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
                                        array($nombre,$apellidos,$email,$numeroIdentificacion,$sexo,$telefono,$facebook,$instagram));
    
    //$usuario = $db->getRow("SELECT * FROM usuarios WHERE numeroIdentificacion = ? AND correoElectronico = ?",array($numeroIdentificacion,$email));
if($res){
    session_start();
    $_SESSION['usuario'] = json_encode($usuario);   
    $_SESSION['message'] = "Datos ingresados correctamente.";
    $_SESSION['message_type'] = "success";
    header('Location: ../app/auth/registro.php');


}else{
    session_start();
    $_SESSION['usuario'] = json_encode($usuario);   
    $_SESSION['message'] = "Error.";
    $_SESSION['message_type'] = "danger";
    header('Location: ../app/auth/registro.php');

}

}else if(@$method == "loginConsulta"){
    $db = new PDO_Connect;
    $db->connect();
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $usuario = $db->getRow("SELECT * FROM usuarioconsulta WHERE correoElectronico = ? ",array($email));
if($usuario){
    session_start();
    $_SESSION['usuario'] = json_encode($usuario);   
    $_SESSION['message'] = "Bienvenido a la consulta de los registros.";
    $_SESSION['message_type'] = "success";
    header('Location: ../app/dashboard/estado.php');
}else{
    session_start();
    $_SESSION['message'] = "Credenciales Incorrectos.";
    $_SESSION['message_type'] = "error";
    header('Location: ../app/auth/loginConsulta.php');
}


}