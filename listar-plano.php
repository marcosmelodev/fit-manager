<h1>Listar Planos</h1>

<?php 
    $sql = "SELECT * FROM plano";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultados(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Plano</th>";
        print "<th>Fidelidade</th>";
        print "<th>Preço</th>";
        print "</tr>";
        while($row = $res -> fetch_object()){
            print "<tr>";
            print "<td>".$row -> id_plano."</td>";
            print "<td>".$row -> nome_plano."</td>";
            print "<td>".$row -> duracao_plano."</td>";
            print "<td>".$row -> valor_plano."</td>";
            print "<td>
            <button class='btn btn-success' onclick=\"
                location.href='?page=editar-plano&id_plano={$row->id_plano}';\">Editar</button>

             <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=salvar-plano&acao=excluir&id_plano={$row->id_plano}';
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