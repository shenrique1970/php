<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Formulários.</h1>
        <button id="toggle-theme">Alternar tema</button>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="idnome">
            <label for="snome">Sobrenome: </label>
            <input type="text" name="snome" id="idsnome">
            <input type="submit" value="Enviar">
        </form>
    </section>
    
    
    <script>
        const toggleBtn = document.getElementById('toggle-theme');
        toggleBtn.addEventListener('click', () => {
            document.body.classList.toggle('light-mode');
        });
    </script>


</body>

</html>