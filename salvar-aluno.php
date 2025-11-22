<?php 
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_aluno'];
            $nasc = $_POST['dt_nasc_aluno'];
            $cpf = $_POST['cpf_aluno'];
            $endereco = $_POST['endereco_aluno'];
            $telefone = $_POST['telefone_aluno'];
            $plano= $_POST['plano_id_plano'];

            $sql = "INSERT INTO aluno (nome_aluno, dt_nasc_aluno, cpf_aluno, endereco_aluno, telefone_aluno, plano_id_plano) VALUES ('{$nome}', '{$nasc}', '{$cpf}', '{$endereco}', '{$telefone}', '{$plano}')";

            $res = $conn -> query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-aluno';</script>";
            } else{
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-aluno';</script>";
            }
            break;

            case 'editar':
                $nome = $_POST['nome_aluno'];
                $nasc = $_POST['dt_nasc_aluno'];
                $cpf = $_POST['cpf_aluno'];
                $endereco = $_POST['endereco_aluno'];
                $telefone = $_POST['telefone_aluno'];
                $plano= $_POST['plano_id_plano'];
        
                $sql = "UPDATE aluno SET nome_aluno='{$nome}', dt_nasc_aluno='{$nasc}', cpf_aluno={$cpf}, endereco_aluno='{$endereco}', telefone_aluno='{$telefone}', plano_id_plano={$plano} WHERE id_aluno=".$_REQUEST['id_aluno'];
    
                $res = $conn->query($sql);
    
                if($res == true){
                    print "<script>alert('Atualizado com sucesso!');</script>";
                    print "<script>location.href='?page=listar-aluno';</script>";
                } else{
                    print "<script>alert('Não atualizou');</script>";
                    print "<script>location.href='?page=listar-aluno';</script>";
                }
                break;
    
            case 'excluir':
                $sql = "DELETE FROM aluno WHERE id_aluno=".$_REQUEST['id_aluno'];
    
                $res = $conn->query($sql);
    
                if($res == true){
                    print "<script>alert('Excluiu com sucesso!');</script>";
                    print "<script>location.href='?page=listar-aluno';</script>";
                } else{
                    print "<script>alert('Não Excluiu');</script>";
                    print "<script>location.href='?page=listar-aluno';</script>";
                }
                break;
    }

?>