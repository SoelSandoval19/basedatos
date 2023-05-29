<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    a {
        text-decoration: none;
    }
    </style>
</head>

<body>
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
$sql="UPDATE producto SET nombre='$nombre',precio ='$precio',cantidadStock ='$stock', 
nroLote='$lote',fecha_vencimiento='$fecha',controlado='$controlado' WHERE cod='$codigo'";
if($conn->query($sql)===true){
    echo 'El registro se modifico correctamente';
}else{
    echo 'Errorf ala modifiacr el registro '.$conn->error;
}

//Cerrar la conexion 
$conn->close();
?>
    <br><br><br>
    <button><a href="buscar_modificar_producto.html">Volver a modificar otro producto</a></button><br><br><br>
    <button><a href="SelectProducto.php">Ver tabla modificada</a></button><br><br><br>
    <button><a href="paginaControl.html">VOLVER AL PANEL DE CONTROL</a></button><br>
</body>

</html>