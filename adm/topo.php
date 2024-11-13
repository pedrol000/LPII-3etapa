<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  

   <!-- navbar -->
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Logo da EA -->
      <a class="navbar-brand" href="#">
        <img src="../img/logo.png" alt="Logo EA" width="40" height="40" class="d-inline-block align-text-top">
      </a>

      <!-- Botão para menu colapsável em dispositivos móveis -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links da navbar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jogos.html">Jogos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="referencia.html">Referencia</a>
          </li>
        </ul>

        <body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="row">

            <div class="col text-end">
              <?php
                  session_start();
                  if(isset($_SESSION['login'])){
                      $login = $_SESSION['login'];
                      $nome = $_SESSION['nome'];
                      $nivel = $_SESSION['nivel'];

                      echo "Bem vindo, $nome | ";
                      if($nivel == 'adm'){
                        echo "<a href='../adm/adm.php'> Admin </a> | ";
                      }
                      echo "<a href='/pedrodotrabalho/adm/logout.php'> Logout </a>";
                  }else{
                    echo"
                        <a href='/pedrodotrabalho/adm/login.php'> LOGIN </a> |
                        <a href='/pedrodotrabalho/usuarios/usuarios.php'> Não Possuo Cadastro </a>
                    ";
                  }
              ?>
            </div>
        </div>
    </div>

      </div>
    </div>
  </nav>
     <!-- navbar -->



    <div class="container mt-5 mb-5">