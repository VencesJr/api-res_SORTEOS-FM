<?php

$mysql=new mysqli("db4free.net","fmuser","21052105","sorteosdb");

if($mysql->connect_error) {
    die("Error de conexión");
} else {
    //echo "Conexión exitosa";
}