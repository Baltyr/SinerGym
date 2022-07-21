<?php

include 'conexion_be.php';

$rut= $_POST['rut'];
$nombre= $_POST['nombre'];
$apellido_paterno= $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$edad= $_POST['edad'];
$direccion= $_POST['direccion'];
$genero= $_POST['genero'];
$correo= $_POST['correo'];
$contrasena= $_POST['contrasena'];
$contrasena  = hash('sha512', $contrasena);
$query = "INSERT INTO usuarios(rut,contrasena,nombre,apellido_paterno,apellido_materno,direccion,genero,edad,correo)
            VALUES('$rut','$contrasena','$nombre','$apellido_paterno','$apellido_materno','$direccion','$genero','$edad','$correo') ";
//Verificar que el correo se repita en la base de datos
 $verificar_correo = mysqli_query($conexion,"SELECT*FROM usuarios where correo='$correo'");
if (mysqli_num_rows($verificar_correo) >0 ) {
    
    echo '
    <script>
        alert("Este correo ya está registrado, intenta con otro diferente");
        window.location = "../login.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion,$query);
if ($ejecutar) {
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location = "../login.php";
    </script>
    ';
}else{
    echo '
    <script>
    alert("Usuario no pudo ser almacenado correctamente");
    window.location = "../login.php";
    </script>
    ';
}
mysqli_close($conexion);
?>