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



function formatoCep($input)
{
    return preg_replace('/^(\d{2})(\d{3})(\d{3})$/', '\\1.\\2-\\3', $input);
}

$cep = formatoCep($_GET['cep']);
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
    '$_GET[nome]',
    '$_GET[sobrenome]',
    '$_GET[usuario]',
    '$cep',
    '$_GET[rua]',
    '$_GET[numero]',
    '$_GET[bairro]',
    '$_GET[cidade]',
    '$_GET[uf]'
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
