<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "residencia";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn)
    {
        die ("Error de conexion: ".mysqli_connect_error());
    }

    $search=$_POST ['search'];
    $id_img=$_POST ['id_img'];
    $year=$_POST ['year'];
    $imagen=addslashes(file_get_contents($_FILES['img-uploader']['tmp_name']));

    $query = mysqli_query($conn,"SELECT * FROM dictamen WHERE  search = '".$id_img."'"); 
    $resultado = $conn->query($query);

    if($resultado){
        echo("Eres una pisola, papi");
    }
    else{
        echo("Mejor retirate men");
    }
?>