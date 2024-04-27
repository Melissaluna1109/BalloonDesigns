<?php

include("conection.php");
$con = conectar();

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Mensaje = $_POST['Mensaje'];


$sql = "INSERT INTO contactos_formulario(Nombre, Apellido, Correo, Telefono, Mensaje) VALUES('$Nombre','$Apellido','$Correo','$Telefono','$Mensaje')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
} else {
}

?>