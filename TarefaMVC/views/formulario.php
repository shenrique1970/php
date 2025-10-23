<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <fieldset>
        <legend>Nova tarefa</legend>
        <label for="nome">Nome: </label>
        <input type="text" name="nome"><br>
        <label for="descricao">Descrição: </label>
        <textarea id="descricao" name="descricao"></textarea><br>
        <label for="prazo">Prazo: </label>
        <input type="text" name="prazo"><br>
    </fieldset>
    <fieldset id="pri2">
        <legend>Prioridade:</legend>
        <input type="radio" name="prioridade" value="1" /> Baixa
        <input type="radio" name="prioridade" value="2" /> Média
        <input type="radio" name="prioridade" value="3" /> Alta
    </fieldset>
    <fieldset id="pri3">
        <label>
            Tarefa concluída:
            <input type="checkbox" name="concluida" value="1" />
        </label>
        <label>
            Lembrete por e-mail:
            <input type="checkbox" name="lembrete" value="1" />
        </label>
    </fieldset>

    <input type="submit" value="Cadastrar" class="botao" />
</form>