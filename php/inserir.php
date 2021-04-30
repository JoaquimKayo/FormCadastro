<?php
include_once "conexao.php";

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
