<h1>Editar Aluno</h1>

<?php 
    $sql = "SELECT * FROM aluno WHERE id_aluno = ".$_REQUEST['id_aluno'];
    $res = $conn -> query($sql);
    $row = $res -> fetch_object();
?>

<form action="?page=salvar-aluno" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_aluno" value="<?php print $row->id_aluno;?>">

    <div class="mb-3">
        <label>nome
            <input type="text" name="nome_aluno" class="form-control" value="<?php print $row->nome_aluno;?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Data de nascimento
            <input type="date" name="dt_nasc_aluno" class="form-control" value="<?php print $row->dt_nasc_aluno;?>">
        </label>
    </div>

    <div class="mb-3">
        <label>CPF
            <input type="text" name="cpf_aluno" class="form-control" value="<?php print $row->cpf_aluno;?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Endereço
            <input type="text" name="endereco_aluno" class="form-control" value="<?php print $row->endereco_aluno;?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Telefone
            <input type="text" name="telefone_aluno" class="form-control" value="<?php print $row->telefone_aluno;?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Plano
            <select name="plano_id_plano" class="form-control">
                <option>Escolher o Plano</option>
                <?php 
                    $sql_1 = "SELECT * FROM plano";
                    $res_1 = $conn->query($sql_1);
                    $qtd_1 = $res_1 -> num_rows;
                    if($qtd_1 > 0){
                        while($row_1 = $res_1->fetch_object()){
                            if($row->plano_id_plano == $row_1->ir_plano){
                                print "<option value = '{$row_1->id_plano}' selected>
                                {$row_1->nome_plano}</option>";
                            }else{
                                print "<option value = '{$row_1->id_plano}' selected>
                                {$row_1->nome_plano}</option>";
                            }
                        }
                    }else{
                        print"<option> Não há alunos cadastrados</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>