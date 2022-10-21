<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {

    require_once 'conexion.php';
    
    $Num_Ticket=$_POST["Num_Ticket"];
    $Name_Ticket=$_POST["Name_Ticket"];
    $Id_Dude=$_POST["Id_Dude"];
    $vendido=$_POST["vendido"];

    $query="INSERT INTO tickets(Num_Ticket, Name_Ticket, Id_Dude, vendido) 
    VALUES('".$Num_Ticket."', '".$Name_Ticket."', ".$Id_Dude.", ".$vendido.")";

    $resultado=$mysql->query($query);

    if($resultado==true) {
        echo "Insertado con éxito";
    } else {
        echo "Error en la insersión";
    }

}