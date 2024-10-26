<?php

function connexionDB(){
    try{
        $db = new PDO("mysql:host=localhost;dbname=velocity", "root", "");
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
    catch(PDOException $exception){
        die($exception->getMessage());
    }
}
?>
