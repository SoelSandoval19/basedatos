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
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px
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
    die("Error de conexion ".$conn->connect_error);
}

//Consulta para recuperar los datos de la tabla de productos
$sql="SELECT * FROM presentacion";
$resultado=$conn->query($sql);
if($resultado->num_rows>0){
    //Crear tabla HTML para mostrar los datos
    echo '<table><tr><th>ID</th><th>PRESENTACION</th></tr>';
    //Imprimir los datos de cada fila en la tabla
    while($fila=$resultado->fetch_assoc()){
        echo '<tr><td>'.$fila['id'].'</td><td>'.$fila['nombre_presentacion'].'</td></tr>';
    }

    //Cerrar tabla
    echo '</table>';
}
else{
    echo 'No se encontro resultados';
}

//Cerrar la conexion
$conn->close();
?>
</body>

</html>