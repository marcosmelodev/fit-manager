<h1>Editar Plano</h1>

<?php 
    $sql = "SELECT * FROM plano WHERE id_plano=".$_REQUEST['id_plano'];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action = "?page=salvar-plano" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_plano" value="<?php print $row->id_plano;?>">

    <div class="mb-3">
        <label> Plano
            <input type="text" name="nome_plano" class="form-control" value="<?php print $row->nome_plano;?>">
        </label>
    </div>

    <div class="mb-3">
        <label> Fidelidade
            <input type="number" name="duracao_plano" class="form-control" value="<?php print $row->duracao_plano;?>">
        </label>
    </div>

    <div class="mb-3">
        <label> Preço
            <input type="number" name="valor_plano" class="form-control" value="<?php print $row->valor_plano;?>">
        </label>
    </div>

    ,<div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>