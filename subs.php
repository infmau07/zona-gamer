<?php
include('conexion.php');

$correo=$_POST['correo'];

$connecc=conni();

$sql ="INSERT INTO correo_electronico (correo) VALUES ('$correo')";

$resul = mysqli_query  ($connecc, $sql);

if($resul){

    echo "<script>alert('Subscripcion exitosa');
    window.location.href='index.html'</script>";

}

else{

    echo "<script>alert('No se pudo subscribirse');
    windows.history.go(-1);</script>";

}

?>