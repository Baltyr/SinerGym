<?php
session_start();
include 'conexion_be.php';

$correo= $_POST['correo'];
$contrasena= $_POST['contrasena'];
$validar_login = mysqli_query($conexion, "SELECT*FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
if(mysqli_num_rows($validar_login) >0){
    $_SESSION['usuario']=$correo;
    echo '
    <script>
    alert("Usuario Logeado correctamente");
    window.location = "../view-user.php";
    </script>
    ';
}else{
    echo'
    <script>
    alert("Usuario no existe, por favor verifique los datos introducidos");
    window.location = "../login.php";
    </script>
    
    ';
    exit;
}
mysqli_close($conexion);
?>