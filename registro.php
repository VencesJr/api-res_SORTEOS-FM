<?php
if($_SERVER["REQUEST_METHOD"]=="GET") {
    require_once 'conexion.php';

    $Id_Tickets=$_GET['Id_Tickets'];

    $query="SELECT * FROM tickets WHERE Id_Tickets=".$Id_Tickets.";";

    $resultado=$mysql->query($query);

    if($mysql->affected_rows > 0) {

        while ($row=$resultado->fetch_assoc()) {
            $array=$row;
        }
        echo json_encode($array);
    } else {
        echo "No hay registros";
    }

    $resultado->close();
    $mysql->close();
}