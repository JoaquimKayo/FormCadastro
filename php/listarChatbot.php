<?php
include_once "conexaoChatbot.php";

$query = "SELECT * FROM AnaliseSentimento ORDER BY";

$result = pg_query($query);

?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">SENTIMENTO</th>
            <th scope="col">PONTUAÇÃO</th>
            <th scope="col">FRASE</th>
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
                        <th scope='row'><?php echo $row["id"]; ?></th>
                        <td><?php echo $row["sentimento"]; ?></td>
                        <td><?php echo $row["pontuacao"]; ?></td>
                        <td><?php echo $row["frase"]; ?></td>
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

<?php echo "<a href='../index.html' class='btn btn-success'>Voltar</a>"; ?>