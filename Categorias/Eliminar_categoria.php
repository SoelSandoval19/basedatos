<html>

<head>
    <title>Eliminar datos </title>
</head>

<body>
    <a href=eliminarcategoria.html> volver a inicio para eliminar otro datos</a><br><br>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="farmacia";

    //Crear la conexion
    $conn= new mysqli($servername,$username,$password,$dbname);

    // verificar la conexion
    if($conn->connect_error){
    die("Error de conexion: ".$conn->connect_error);
    }

    //Obtener el codigo de la categoria a eliminar del formulario
    $codigo = $_POST['codigo'];

    //Crear consulta SQL para eliiminar la categoria correspondiente
    $sql="DELETE FROM categoria WHERE id=$codigo";
    if($conn->query($sql)===true){
    echo 'El registro se elimino correctamente';
    }else{
    echo 'Error a eliminar el registro '.$conn->error;

    }

    //cerrar la conexion
    $conn->close();
    ?>
    <br><br>
    <a href=selectcategoria.php>Imprimir tabla modificada</a>
</body>

</html>