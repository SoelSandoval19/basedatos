<?php
$servername="localhost";
$username="root";
$password="";
$dbname="farmacia";

//Crear la conexion
$conn=new mysqli($servername,$username,$password,$dbname);

//verificar la conexion
if($conn->connect_error){
    die("Error de conexion ".$conn->connect_error);
}

//Obtener el codigo del producto a eliminar desde el formulario
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];

//Crear la consulta SQL para eliminar el producto correspondiente
$sql="DELETE FROM producto WHERE cod='$codigo'";
$sql="DELETE FROM producto WHERE nombre='$nombre'";
if($conn->query($sql)===true){
    echo 'El registro se elimino correctamente';
}else{
    echo 'Error al eliminar el producto: '.$conn->error;
}

//Cerrar la conexion
$conn->close();
?>