<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    th,
    td {
        boreder: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
    }
    </style>
</head>

<body>
    <?php
$serername="localHost";
$username="root";
$password="";
$dbname="farnacia";

//Crear la conexion
$conn= new mysqli($serername,$username,$password,$dbname);

//Verificar la conexion
if($conn->connect_error){
    die("Error de conexion: ".$conn->connect_error);
}

//Consulta para recuperear los datos de una tabla
$sql="SELECT * FROM clientes";
$resultado=$conn->query($sql);
if($resultado->num_rows>0){
//Crear tabla HTML para mostrar los datos
echo "<table><tr><th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>TELEFONO</th></tr>";
//Imprimir los resultados de cada fila en la tabla
while($fila=$resultado->fetch_assoc()){
    echo '<tr><td>'.$fila["id"].'</td><td>'.$fila["nombre"].'</td><td>'.$fila["apellido"].'</td><td>'.$fila["telefono"].'</td></tr>';
}

//Cerrar tabla
echo '</table';
}else{
    echo '</table>';
}
$conn->close();
?>
</body>

</html>