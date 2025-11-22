<h1>Cadastrar Plano</h1>
<form action="?page=salvar-plano" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>plano
            <input type="text" name="nome_plano" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Fidelidade
            <input type="number" name="duracao_plano" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Valor do Plano
            <input type="number" name="valor_plano" class="form-control">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>