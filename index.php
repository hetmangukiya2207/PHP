<?php

include("config/config.php");

$config = new Config();

$res = $config->connect();

if($res){
    echo"<h1>Connection Succesfully...</h1>";
}else{
    echo"Connection Failed";
}

?>