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

    $id_img=$_POST ['id_img'];
    $year=$_POST ['year'];
   # $imagen=$_FILES['img-uploader']['tmp_name'];
    $imagen=addslashes(file_get_contents($_FILES['img-uploader']['tmp_name']));

    $query = "INSERT INTO dictamen1(id_img,year,imagen) VALUES('$id_img','$year','$imagen')";
    $resultado = $conn->query($query);

    if($resultado){
        header("location:up.html");
    }
    else{
        header("location:up.html");
    }
?>