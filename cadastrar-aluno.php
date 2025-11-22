<h1>Cadastrar Aluno</h1>

<form action="?page=salvar-aluno" method="POST">
    <input type="hidden" name="acao" value="cadastrar";
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_aluno" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Data de Nascimento
            <input type="date" name="dt_nasc_aluno" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>CPF
            <input type="text" name="cpf_aluno" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Endereço
            <input type="text" name="endereco_aluno" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Telefone
            <input type="text" name="telefone_aluno" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Plano</label>
            <select type="text" name="plano_id_plano" class="form-control">
                <option>Escolha o Plano</option>
                <?php 
                    $sql = "SELECT * FROM plano";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_object()){
                        print "<option value='".$row->id_plano."'>";
                        print $row->nome_plano."</option>";
                    }    
                ?>
            </select>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>