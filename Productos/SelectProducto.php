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
        padding: 10px;
    }

    a {
        text-decoration: none;
    }
    </style>
</head>

<body><?php $servername="localhost";
    $username="root";
    $password="";
    $dbname="farmacia";

    //Crear conexion
    $conn=new mysqli($servername, $username, $password, $dbname);

    //verificar la conexion
    if($conn->connect_error) {
        die("Error de conexion ".$conn->error);
    }

    //Consulta para recupera las tablas de productos
    $sql="SELECT * FROM producto";
    $resultado=$conn->query($sql);

    if($resultado -> num_rows>0) {
        //Crear tabla html para mostrar datos 
        echo" <table><tr><th>Codigo</th><th>Nombre</th><th>Precio</th><th>Numero de lote</th><th>Controlado</th><th>Stock</th>
<th>Fecha de vencimiento</th><th>Categoria</th><th>Presentacion</th><th>Proveedor</th></tr>";


        //Imprimir los datos de cada fila en la tabla
        while($fila=$resultado->fetch_assoc()) {
            echo '<tr><td>'.$fila['cod']."</td><td>".$fila['nombre']. "</td><td>".$fila['precio']. 
            "</td><td>".$fila['nroLote']."</td><td>".$fila['controlado']."</td><td>".$fila['cantidadStock']."</td><td>".$fila['fecha_vencimiento']. 
            "</td><td>".$fila['id_categoria']."</td><td>".$fila['id_presentacion']."</td><td>".$fila['id_proveedor']."</td></tr>";
        }

        //Cerrar la tabla
        echo '</table';
    }

    else {
        echo 'No se encontro resultados';
    }

    // Cerrar la conexion
    $conn->close();
    ?>
    <br><br><br>
    <button><a href="paginaControl.html">VOLVER A PANEL DE CONTROL</a></button><br><br>
</body>

</html>