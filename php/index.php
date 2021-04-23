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




// idCliente serial,
// nome VARCHAR(20) NOT NULL,
// sobrenome VARCHAR(20) NOT NULL,
// usuario VARCHAR(30) NOT NULL,
// cep VARCHAR(10),
// rua VARCHAR(50) NOT NULL,
// numero int,
// bairro VARCHAR(20),
// cidade VARCHAR(25) NOT NULL,
// uf CHAR(2) NOT NULL,

$query = "INSERT INTO Cliente(  
                                nome,
                                sobrenome, 
                                usuario, 
                                cep, 
                                rua, 
                                numero, 
                                bairro, 
                                cidade, 
                                uf
) VALUES (  
    '$_POST[nome]',
    '$_POST[sobrenome]',
    '$_POST[usuario]',
    '$_POST[cep]',
    '$_POST[rua]',
    '$_POST[numero]',
    '$_POST[bairro]',
    '$_POST[cidade]',
    '$_POST[uf]'
)";

$result = pg_query($query);

if ($result) {

    echo "<script>alert('Dados inseridos com Sucesso!');</script>";
    header("refresh: 2;../index.html");
} else {

    echo "<script>alert('Erro ao inserir os dados!!');</script>";
    echo "<a href='../index.html'>Voltar</a>";
}




die();
