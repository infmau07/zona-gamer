<?php
include('conexion.php');

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

$connecc=conni();

$sql ="INSERT INTO cuenta (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

$resul = mysqli_query  ($connecc, $sql);

if($resul){

    echo "<script>alert('Registro exitoso');
    window.location.href='index.html'</script>";

}

else{

    echo "<script>alert('No se pudo subscribirse');
    windows.history.go(-1);</script>";

}

?>