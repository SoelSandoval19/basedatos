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
$categoria=$_POST['id_categoria'];
$presentacion=$_POST['id_presentacion'];
$proveedor=$_POST['id_proveedor'];

//Crear consulta SQL para ingresar el nuevo producto
$sql="INSERT INTO producto (nombre,precio,nroLote,controlado,cantidadStock,fecha_vencimiento,id_categoria,id_presentacion,id_proveedor) VALUES 
('$nombre','$precio','$lote','$controlado','$cantidad','$vencimiento','$categoria','$presentacion','$proveedor')";

if($conn->query($sql)===true){
    echo 'El registro se inserto correctamente';
}else{
    echo 'Error el registro no se inserto correctamente';
}

//Cerrar la conexion
$conn->close();
?>
    <br>
    <button><a href="insertproducto.html">Ingresar un nuevo producto</a></button><br><br>
    <button><a href="SelectProducto.php">Ver tabla modificada</a></button><br><br>
    <button> <a href="paginaControl.html">VOLVER AL PANEL DE CONTROL </a></button><br>
</body>

</html>