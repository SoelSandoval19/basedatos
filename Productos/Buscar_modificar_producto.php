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

//Cerrar la conexion
$conn = new mysqli($servername,$username,$password,$dbname);

//Verificar la conexion
if($conn->connect_error){
    die("Error de conexion:".$conn->connect_error);
}

//Obtener valor del campo de texto del formulario
$codigo=$_POST['codigo'];

//Crear consulta SQL para buscar el producto correspondiente
$sql="SELECT * FROM producto WHERE cod='$codigo'";
$resultado=$conn->query($sql);
if($resultado->num_rows>0){
    //Mostar el formulario de modificacion con los datos del registro encontrado
    $row=$resultado->fetch_assoc();
    ?>
    <form action="Modificar_producto.php" method="Post">
        <label for="codigo"> Codigo del producto </label>
        <input type="number" id="codigo" name="codigo" value="<?php echo $row['cod'];?>" readonly><br><br>
        <label for="nombre">Nombre del producto</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'];?>"><br><br>
        <label for="precio">Precio del producto</label>
        <input type="number" id="precio" name="precio" value="<?php echo $row['precio'];?>"><br><br>
        <label for="stock">Cantidad de producto en el Almacen</label>
        <input type="number" name="stock" id="stock" value="<?php echo $row['cantidadStock'];?>"><br><br>
        <label for="lote">Numero de lote</label>
        <input type="number" name="lote" id="lote" value="<?php echo $row['nroLote'];?>"><br><br>
        <label for="fecha">Fecha de vencimiento del producto</label>
        <input type="date" name="fecha" id="fecha" value="<?php echo $row['fecha_vencimiento'];?>"><br><br>
        <label for="controlado">Si el prodcuto es controlado ingrese cero en caso contrario 1</label>
        <input type="number" name="controlado" id="controlado" value="<?php echo $row['controlado'];?>"><br><br>
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
    <button><a href="buscar_modificar_prodcuto.html">Volver atras</a></button><br>
</body>

</html>