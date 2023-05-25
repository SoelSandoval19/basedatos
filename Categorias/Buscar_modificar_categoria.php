<?php
$sername="localhost";
$username="root";
$password="";
$dbname="farmacia";

//Crear la conexion
$conn=  new mysqli($sername,$username,$password,$dbname);

//Verificar la conexion
if($conn->connect_error){
    die("Error de conexion: ".$conn->connect_error);
}

//Obtener el valor del campo de texto del formulario
$codigo=$_POST['Codigo'];

//Crear consulta SQL para buscar la categoria correspondiente 
$sql="SELECT * FROM categoria WHERE id='$codigo'";
$resultado = $conn->query($sql);
if($resultado->num_rows>0){
//Mostrar el formulario de modificacion con los datos del registro encontrado
$row = $resultado-> fetch_assoc();
?>
<form action="Modificar_categoria.php" method="Post">
    <label for="codigo">Codigo categoria</label>
    <input type="text" id="codigo" name="codigo" value="<?php echo $row['id'];?>" readonly><br>
    <label for="nombre">Nombre de la categoria: </label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre_descripcion'];?>"> <br>
    <input type="submit" value="Modificar">
</form>
<?php
}else{
    echo "No se encontro ningun registro con ese codigo";
}
// Cerrar la conexion
$conn-> close();
?>