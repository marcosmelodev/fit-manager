<h1>Listar Alunos</h1>

<?php 
    $sql = "SELECT * FROM aluno AS a
    INNER JOIN plano AS p
    on a.plano_id_plano = p.id_plano";

    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultados(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>CPF</th>";
        print "<th>Endereço</th>";
        print "<th>Telefone</th>";
        print "<th>Plano</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while( $row = $res -> fetch_object()){
            print "<tr>";
            print "<td>".$row -> id_aluno."</td>";
            print "<td>".$row -> nome_aluno."</td>";
            print "<td>".$row -> dt_nasc_aluno."</td>";
            print "<td>".$row -> cpf_aluno."</td>";
            print "<td>".$row -> endereco_aluno."</td>";
            print "<td>".$row -> telefone_aluno."</td>";
            print "<td>".$row -> nome_plano."</td>";
            print "<td>
                    <button class='btn btn-success' onclick=\"
                        location.href='?page=editar-aluno&id_aluno={$row->id_aluno}';\">Editar</button>

                     <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                            location.href='?page=salvar-aluno&acao=excluir&id_aluno={$row->id_aluno}';
                        }else{
                            false;
                        }\">Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p> Não encontrou resultado</p>";
    }
?>