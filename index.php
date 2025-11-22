<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Manager</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Fit Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Planos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-plano">Cadastrar</a>
                            <li>
                            <li><a class="dropdown-item" href="?page=listar-plano">Listar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Alunos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-aluno">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-aluno">Listar</a></li>
                        </ul>
                    </li>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">

             <?php 
                ini_set('display_errors', 1);
                 error_reporting(E_ALL);
              
                    //arquivo de conexão
                    include('config.php');

                    switch (@$_REQUEST['page']){
                        //Planos
                        case 'cadastrar-plano':
                            include('cadastrar-plano.php');
                            break;
                        case 'listar-plano':
                            include('listar-plano.php');
                            break;
                        case 'editar-plano':
                            include('editar-plano.php');
                            break;
                        case 'salvar-plano':
                            include('salvar-plano.php');
                            break;
                        
                        //Alunos
                        case 'cadastrar-aluno':
                            include('cadastrar-aluno.php');
                            break;
                        case 'listar-aluno':
                            include('listar-aluno.php');
                            break;
                        case 'editar-aluno':
                            include('editar-aluno.php');
                            break;
                        case 'salvar-aluno':
                            include('salvar-aluno.php');
                            break;
                        default:
                            print "<h1> Seja Bem Vindo ao FIT MANAGER</h1>";
                
                }
            ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>