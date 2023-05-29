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
$conn=new mysqli($servername,$username,$password,$dbname);

//verificar la conexion
if($conn->connect_error){
    die("Error de conexion ".$conn->connect_error);
}

//Obtener el codigo del producto a eliminar desde el formulario
$codigo=$_POST['codigo'];
//Crear la consulta SQL para eliminar el producto correspondiente
$sql="DELETE FROM producto WHERE cod='$codigo'";
if($conn->query($sql)===true){
    echo 'El registro se elimino correctamente';
}else{
    echo 'Error al eliminar el producto: '.$conn->error;
}

//Cerrar la conexion
$conn->close();
?>
    <br><br><br>
    <button><a href="eliminar.html">Volver a eliminar otro dato</a></button><br><br>
    <button><a href="SelectProducto.php">Ver tabla modificada</a></button><br><br>
    <button><a href="paginaControl.html">VOLVER AL PANEL DE CONTROL </a></button><br>
</body>

</html>