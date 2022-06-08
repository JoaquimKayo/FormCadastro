<?php
// Inicializar variaveis de conexao.
$host = "joaquimkayo.japaneast.cloudapp.azure.com";
$database = "webhook_dialogflow";
$user = "postgres";
$password = "13579";
$port = "5432";
// Inicializar objeto de conexao.
$connection = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");
//    or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
//print "Successfully created connection to database.<br/>";
?>