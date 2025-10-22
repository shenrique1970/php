<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tarefa = $_POST["nome"] ?? "sem nome";
    $descricao = $_POST["descricao"] ?? "sem descrição";
    $prazo = $_POST["prazo"] ?? "sem prazo";
    $prioridade = $_POST["prioridade"] ?? "sem prioridade";
    $concluida = $_POST["concluida"] ?? "sem conclusão";

    ?>
    <section>
        <table border="1">
            <tr>
                <th>Tarefa</th>
                <th>Descricao</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Concluída</th>
                <th>Opções</th>
            </tr>

            <tr>
                <td>
                    <a href="#"><?php echo $tarefa; ?></a>
                </td>
                <td>
                    <?php echo $descricao; ?>
                </td>
                <td>
                    <?php echo $prazo ?>
                </td>
                <td>
                    <?php echo $prioridade ?>
                </td>
                <td>
                    <?php echo $concluida ?>
                </td>
                <td>
                    <a href="">
                        Editar
                    </a>
                    <a href="">
                        Remover
                    </a>
                </td>
            </tr>
        </table>
    </section>
</body>

</html>