<?php

class Database
{ 
    var $host;      
    var $password;
    var $user;
    var $database;

    function Database()
    {
        $hostElegido = "localhost";
        $passElegido = "";
        $usuarioElegido = "";
        $databaseElegido = "";

        $this->host = $hostElegido;
        $this->password = $passElegido;
        $this->user = $usuarioElegido;
        $this->database = $databaseElegido;
    }
}


?>