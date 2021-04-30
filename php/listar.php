<?php
include_once "conexao.php";

$query = "SELECT * FROM Cliente ORDER BY idCliente";

$result = pg_query($query);

?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Usuario</th>
            <th scope="col">Rua</th>
            <th scope="col">Número</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">UF</th>
            <th scope="col">CEP</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if ($result) {
            if (pg_num_rows($result) > 0) {

                /*
                    Realiza um loop enquando houver registros.
                    O método pg_fetch_array retorna cada registro como um Array
                */
                while ($row = pg_fetch_array($result)) {
                    /*
                        Imprime o registro atual
                    */
        ?>
                    <tr>
                        <th scope='row'><?php echo $row["idcliente"]; ?></th>
                        <td><?php echo $row["nome"]; ?></td>
                        <td><?php echo $row["sobrenome"]; ?></td>
                        <td><?php echo $row["usuario"]; ?></td>
                        <td><?php echo $row["rua"]; ?></td>
                        <td><?php echo $row["numero"]; ?></td>
                        <td><?php echo $row["bairro"]; ?></td>
                        <td><?php echo $row["cidade"]; ?></td>
                        <td><?php echo $row["uf"]; ?></td>
                        <td><?php echo $row["cep"]; ?></td>
                    </tr>
        <?php

                }
            } else {
                echo "Nenhum registro encontrado no banco de dados!!";
            }

            /*
                Fecha a conexão com o PostgreSQL
            */
            pg_close($connection);
        } else {

            echo "<script>alert('Erro ao listar os dados!!');</script>";
        }
        ?>
    </tbody>
</table>

<?php echo "<a href='../index.html'>Voltar</a>"; ?>