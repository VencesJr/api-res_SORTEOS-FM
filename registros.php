<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    require_once 'conexion.php';
    $query="SELECT * FROM tickets";
    $resutltado=$mysql->query($query);
    if($mysql->affected_rows > 0) {
        $json="{\"data\":[";
        while($row=$resutltado->fetch_assoc()) {
            $json=$json.json_encode($row);
            $json=$json.",";
        }
        $json=substr(trim($json),0,-1);
        $json=$json."]}";
    }
    echo $json;
    $resutltado->close();
    $mysql->close();
}