<?php 
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_plano'];
            $fidelidade = $_POST['duracao_plano'];
            $preco = $_POST['valor_plano'];

            $sql = "INSERT INTO plano (nome_plano, duracao_plano, valor_plano) VALUES ('{$nome}', '{$fidelidade}', '{$preco}')";

            $res = $conn -> query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-plano';</script>";
            } else{
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-plano';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST['nome_plano'];
            $fidelidade = $_POST['duracao_plano'];
            $preco = $_POST['valor_plano'];

            $sql = "UPDATE plano SET nome_plano='{$nome}', duracao_plano='{$fidelidade}', 
            valor_plano='{$preco}'WHERE id_plano=".$_REQUEST['id_plano'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-plano';</script>";
            } else{
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-plano';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM plano WHERE id_plano=".$_REQUEST['id_plano'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-plano';</script>";
            } else{
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-plano';</script>";
            }
            break;
    }

?>