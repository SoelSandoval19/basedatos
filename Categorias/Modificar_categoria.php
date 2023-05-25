<?php
$servername="localhost";
$username="root";
$password="";
$dbname="farmacia";

//Crear conexion
$conn= new mysqli($servername,$username,$password,$dbname);

//Verificar la conexion 
if($conn->connect_error){
    die("Error de conexion: ".$conn->connect_error);
}

//Obtener los valores del formulario
$codigo = $_POST["codigo"];
$descripcion=$_POST["nombre"];

//Crear consulta SQL para modificar categoria correspondiente 
$sql="UPDATE categoria SET nombre_descripcion='$descripcion' WHERE id = '$codigo'";
if($conn->query($sql)===true){
    echo 'El registro se modifico correctamente';
}else{
    echo 'Error al modificar el registro: '.$conn->error;
}

//Cerrar la conexion 
$conn ->close();
?>