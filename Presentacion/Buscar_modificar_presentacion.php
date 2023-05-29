<html>

<head>
    <title>buscar y modificar presentacion </title>
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

//Verificar la conexion
if($conn->connect_error){
    die("Error de conexion ".$conn->error);
}

//Obtener el valor del campo de texto del formulario
$codigo=$_POST['codigo'];

//Crear consulta SQL para buscar la presentacion correspondiente 
$sql="SELECT * FROM presentacion  WHERE id='$codigo'";
$resultado=$conn->query($sql);
if($resultado->num_rows>0){
    //Mostar el formulario de modificacion con los datos del registro encontrado
    $row =$resultado->fetch_assoc();
    ?>
    <form action="Modificar_presentacion.php" method="Post">
        <label for="codigo">Codigo de la presentacion del producto</label>
        <input type="number" id="codigo" name="codigo" value="<?php echo $row['id'];?>" readonly><br><br>
        <label for="nombre">Presentacion del producto</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre_presentacion'];?>"><br><br>
        <input type="submit" value="Modificar">
    </form>
    <?php
}else{
    echo "No se encontro ningun registro con ese codigo";
}

//Cerrar la conexion
$conn->close();
?>
    <br><br>
    <button><a href="buscar_modificar_presentacion.html">Volver atras </a></button>
</body>

</html>