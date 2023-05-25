<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="farmacia";

//crear la conexion 
$conn = new mysqli($servername,$username,$password,$dbname);

//Verificar la conexion 
if($conn->connect_error){
    die ("Error de conexion ".$conn->connect_error);
} 

//Obtener el valor del campo de texto del formulario
$nombre = $_POST['nombre'];

//Crear consulta SQL para insertar el nuevo registro
$sql= "INSERT INTO presentacion(nombre_presentacion )VALUES('$nombre') ";
if($conn->query ($sql)===true){
    echo "El registro se inserto correctamente";
}
else{
    echo 'Error al insertar el registro '.$conn->error;
}

//Cerrar la conexion
$conn-> close();
?>