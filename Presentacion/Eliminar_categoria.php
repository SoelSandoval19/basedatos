<?php
$servername="localHost";
$username="root";
$password="";
$dbname="farmacia";

//crear la conexion 
$conn= new mysqli($servername,$username,$password,$dbname);

//Verificar la conexion'
if($conn->connect_error){
    die("Error en la conexion ".$conn->error);
}

//Obtener el codigo de la presentacion a eliminar desde el formulario
$codigo=$_POST['codigo'];

// crear consulta Sql para eliminar la categoria correspondiente
$sql="DELETE FROM presentacion WHERE id='$codigo'";
if($conn->query($sql)===true){
    echo 'El registro se elimino correctamente';
}else{
    echo 'Error eliminar el registro '.$conn->error;
}

//Cerrar la conexion 
$conn->close();
?>