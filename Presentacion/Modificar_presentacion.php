<?php
$servername="localhost";
$username="root";
$password="";
$dbname="farmacia";

//Crear la conexion
$conn=new mysqli($servername,$username,$password,$dbname);

//Verificar la conexion
if($conn->connect_error){
    die("Error de la conexion ".$conn->error);
}

//obtener los valores del formulario
$codigo=$_POST['codigo'];
$nombre =$_POST['nombre'];

//Crear la consulta SQL para modificar presentacion correspondiente 
$sql="UPDATE presentacion SET nombre_presentacion='$nombre' WHERE id='$codigo'";
if($conn->query($sql)===true){
    echo 'EL registro se modifico correctamente';
}else{
    echo 'Error al modificar el registro '.$conn->error;
}

//Cerrar la conexion
$conn->close();
?>