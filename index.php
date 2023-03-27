<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body data-bs-theme="dark" style="color: white;">
      
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand px-1" href="#" style="color: black;">Cadastro</a>
            <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: black;" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="?page=cadastro">Cadastrar animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="?page=listar">Listar Animais</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("./config.php");
                    switch (@$_REQUEST["page"]) {
                        case "cadastro":
                            include("./cadastro-animal.php");
                            break;
                        case "listar":
                            include("./listar-animais.php");
                            break;
                        case "salvar":
                            include("./salvar-animal.php");
                            break;
                        case "editar":
                            include("./editar-animal.php");
                            break;
                        case "pesar":
                            include("./pesagem-animal.php");
                            break;
                        case "listar-pesagens":
                            include("./listar-pesagens.php");
                            break;
                        case "salvar-pesagem":
                            include("./salvar-pesagem.php");
                            break;
                        case "editar-pesagem":
                            include("./editar-pesagem.php");
                            break;
                        default:
                            echo "<h1>Bem vindo(a) ao sistema</h1>";
                            echo "
                                <div class='row'>
                                    <div class='col mt-3'>
                                        <div class='content'>
                                            <strong><p class='mt-3'>Cadastre um animal colocando suas informações, como seu número de identificação, sexo e data de nasicmeto.</p></strong>
                                            <button class='btn btn-primary'><a class='nav-link' href='?page=cadastro'>Cadastre um animal</a></button>
                                        </div>
                                    </div>
                                    <div class='col mt-3'>
                                        <div class='content'>
                                            <strong><p class='mt-3'>Verifique a lista de animais cadastrados, podendo adicionar informações sobre seu peso.</p></strong>
                                            <button class='btn btn-primary'><a class='nav-link' href='?page=listar'>Listar animais</a></button>
                                        </div>
                                    </div>
                                </div>
                            ";

                    }
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
