<?php
include('conexion.php');

$nombre=$_POST['nombre'];
$motivo=$_POST['motivo'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

$connecc=conni();

$sql ="INSERT INTO contacto (nombre, motivo, correo, mensaje) VALUES ('$nombre', '$motivo', '$correo', '$mensaje')";

$resul = mysqli_query  ($connecc, $sql);

if($resul){

    echo "<script>alert('Gracias nos pondremos en contacto con usted');
    window.location.href='index.html'</script>";

}

else{

    echo "<script>alert('Errorr');
    windows.history.go(-1);</script>";

}

?>