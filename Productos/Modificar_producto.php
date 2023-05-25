<?php
$servername="localhost";
$username="root";
$password="";
$dbname="farmacia";

//Crear la conexion
$conn= new mysqli($servername,$username,$password,$dbname);

//Verificar la conexion
if($conn->connect_error){
    die("Error de conexion ".$conn->connect_error);
}

//Obtener valores del formulario
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$lote=$_POST['lote'];
$fecha=$_POST['fecha'];
$controlado=$_POST['controlado'];

//Crear consulta SQL para modificar producto correspondiente
$sql="UPDATE producto SET nombre='$nombre',";
$sql="UPDATE producto SET precio='$precio'";
$sql="UPDATE producto SET cantidadStock='$stock'";
$sql="UPDATE producto SET nroLote='fecha'";
$sql="UPDATE producto SET fecha_vencimiento='$fecha'";
$sql="UPDATE producto SET controlado='$controlado'";
if($conn->query($sql)===true){
    echo 'El registro se modifico correctamente';
}else{
    echo 'Errorf ala modifiacr el registro '.$conn->error;
}

//Cerrar la conexion 
$conn->close();
?>