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

    #$query = mysqli_query($conn,"SELECT * FROM dictamen1 WHERE id_img = '".$search."'"); 
    $query = "SELECT * FROM dictamen1 WHERE id_img = '".$search."'";
    #$nr = mysqli_num_rows($query);

    /* ejecutar multi consulta */
if (mysqli_multi_query($conn, $query)) {
    do {
        /* almacenar resultado de la primera consulta */
        if ($result = mysqli_store_result($conn)) {
            while ($row = mysqli_fetch_row($result)) {
                echo '<img width="1110" height="1054" src="data:image/jpeg;base64,'.base64_encode($row[2]).' "/>';
            }
            #mysqli_free_result($query);
        }
        /* mostrar divisor */
        if (mysqli_more_results($conn)) {
            printf("-----------------\n");
        }
    } while (mysqli_next_result($query));
}

    /*$row=mysqli_fetch_row($query);

    echo '<img width="1110" height="1054" src="data:image/jpeg;base64,'.base64_encode($row[2]).' "/>';
    mysqli_free_result($query);*/
?>