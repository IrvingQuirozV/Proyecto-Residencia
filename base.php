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

    $correo=$_POST ['email'];
    $contra=$_POST ['pass'];

    $query = mysqli_query($conn,"SELECT * FROM login WHERE correo = '".$correo."' and contra = '".$contra."'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1) 
    {
        header("location:up.html");
    }
    else if ($nr == 0)
    {
        header("location: index.html");
    }
?>
    