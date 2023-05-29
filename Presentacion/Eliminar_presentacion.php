<html>

<head>
    <title>Eliminar la categoria</title>
    <style>
    a {
        text-decoration: none;
    }
    </style>
</head>

<body>
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
    <br><br>
    <button type="button"><a href="eliminarPresentacion.html">Volver a eliminar dato </a></button> <br><br>
    <button><a href="SelectPresentacion.php">Ver tabla modificada</a></button><br><br>
    <button><a href="paginaControl.html">VOLVER AL PANEL DE CONTROL</a></button>
</body>

</html>