<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ger. de Tarefas</title>
    <link rel="stylesheet" href="./assets/tarefas.css">
</head>
<body>
    <header>
        <h1>Gerenciador de Tarefas</h1> 
        <button id="toggle-theme">Alternar tema</button>
    </header>
    <main>
        <section>
            <?php include('./views/formulario.php'); ?>
        </section>
        <section>
           <?php include('./views/tabela.php'); ?> 
        </section>    
    </main>  
    <script>
        const toggleBtn = document.getElementById('toggle-theme');
        toggleBtn.addEventListener('click', () => {
            document.body.classList.toggle('light-mode');
        });     
    </script>
</body>
</html>