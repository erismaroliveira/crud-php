<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/e206184fc1.js" crossorigin="anonymous"></script>
    <title>Guia dos Advogados</title>
  </head>
  <body>
    <header>
      <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-info">
          <a class="navbar-brand" href="#">
            <img id="logo" src="docs/logo.png" alt="Guia dos Advogados"> Guia dos Advogados
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">HOME</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ADVOCACIA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?page=advocacia-cadastrar">Cadastrar</a>
                  <a class="dropdown-item" href="?page=advocacia-consultar">Consultar</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ATENDENTE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a>
                  <a class="dropdown-item" href="?page=atendente-consultar">Consultar</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  CLIENTE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?page=cliente-cadastrar">Cadastrar-se</a>
                  <a class="dropdown-item" href="?page=cliente-consultar">Login</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ADVOGADO
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?page=advogado-cadastrar">Cadastrar</a>
                  <a class="dropdown-item" href="?page=advogado-consultar">Consultar</a>
                </div>
              </li>
              <li class="nav-item link">
                <a class="nav-link link-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="link" aria-haspopup="true" aria-expanded="false">
                  CONTATO
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <?php
                  //CONEXAO COM O BANCO DE DADOS
                   include("config.php");
                   //CHAMAR AS PÁGINAS
                   switch (@$_REQUEST["page"]) {
                    // Advocacia
                      case 'advocacia-cadastrar':
                        include("advocacia-cadastrar.php");
                        break;
                      case 'advocacia-consultar':
                        include("advocacia-consultar.php");
                        break;
                      case 'advocacia-editar':
                        include("advocacia-editar.php");
                        break;
                      case 'advocacia-salvar':
                        include("advocacia-salvar.php");
                        break;
                      // Atendente
                      case 'atendente-cadastrar':
                        include("atendente-cadastrar.php");
                        break;
                      case 'atendente-consultar':
                        include("atendente-consultar.php");
                        break;
                      case 'atendente-editar':
                        include("atendente-editar.php");
                        break;
                      case 'atendente-salvar':
                        include("atendente-salvar.php");
                        break;
                      // Cliente
                      case 'cliente-cadastrar':
                        include("cliente-cadastrar.php");
                        break;
                      case 'cliente-consultar':
                        include("cliente-consultar.php");
                        break;
                      case 'cliente-editar':
                        include("cliente-editar.php");
                        break;
                      case 'cliente-salvar':
                        include("cliente-salvar.php");
                        break;
                      // Advogado
                      case 'advogado-cadastrar':
                        include("advogado-cadastrar.php");
                        break;
                      case 'advogado-consultar':
                        include("advogado-consultar.php");
                        break;
                      case 'advogado-editar':
                        include("advogado-editar.php");
                        break;
                      case 'advogado-salvar':
                        include("advogado-salvar.php");
                        break;
                      // Reunião
                      case 'reuniao-cadastrar':
                        include("reuniao-cadastrar.php");
                        break;
                      case 'reuniao-consultar':
                        include("reuniao-consultar.php");
                        break;
                      case 'reuniao-editar':
                        include("reuniao-editar.php");
                        break;
                      case 'reuniao-salvar':
                        include("reuniao-salvar.php");
                        break;
                      
                      default:
                        include("main.php");
                    } 

                ?>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>