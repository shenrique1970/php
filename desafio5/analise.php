<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>Analisador de número real</h1>
    </header>
    <main>
        <?php 
            // $num = $_REQUEST["num"] ?? 0;
            $num = $_POST["num"] ?? 0;
            $int = (int) $num;
            $frac = $num - $int;
            
            echo "<ul><li>A parte inteira é <strong>". number_format($int,0,",",".") ."</strong></li>";
            echo "<li>A parte fracionaria é <strong>". number_format($frac,3,",",".") ."</strong></li></ul>";
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>