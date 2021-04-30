<?php
// Inicializar variaveis de conexao.
$host = "ec2-54-224-120-186.compute-1.amazonaws.com";
$database = "d6hdi7upqbfks0";
$user = "wbfslpugqeescy";
$password = "cfb729d51f9a4985eabe176ab5c7478e5cdbc76c45da0664a9f5a56c141937fb";

// Inicializar objeto de conexao.
$connection = pg_connect("host=$host dbname=$database user=$user password=$password");
//    or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
//print "Successfully created connection to database.<br/>";

?>