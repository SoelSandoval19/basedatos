<?php
$servername="localhost";
$username="root";
$password="";
$dbname="farmacia";

//crear la conexion
$conn = new mysqli($servername,$username,$password,$dbname);

//Verificar la conexion
if($conn->connect_error){
    die("Error de conexion ".$conn->connect_error);
}

//obtener el valor del campo de texto del formulario
$nombre =$_POST['nombre'];
$precio=$_POST['precio'];
$lote=$_POST['lote'];
$controlado=$_POST['controlado'];
$cantidad= $_POST['stock'];
$vencimiento=$_POST['vencimiento'];

//Crear consulta SQL para ingresar el nuevo producto
$sql="INSERT INTO producto (nombre,precio,nroLote,controlado,cantidadStock,fecha_vencimiento) VALUES 
('$nombre','$precio','$lote','$controlado','$cantidad','$vencimiento')";

if($conn->query($sql)===true){
    echo 'El registro se inserto correctamente';
}else{
    echo 'Error el registro no se inserto correctamente';
}

//Cerrar la conexion
$conn->close();
?>