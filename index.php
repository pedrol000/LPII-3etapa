<?php
    include "adm/home.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
     <!-- carrosel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/bannerfc1.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/bannerfifa18.webp" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/fifa19.jpg" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
      <!-- carrosel -->
        <br><br>
      <!-- cards -->
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="img/foto card.png" class="card-img-top" alt="Imagem 1">
              <div class="card-body">
                <h5 class="card-title">Cristiano Ronaldo</h5>
                <p class="card-text">Cristiano Ronaldo, um dos maiores jogadores de futebol de todos os tempos, é conhecido por sua incrível habilidade e dedicação. Com inúmeros títulos e recordes, ele continua a inspirar fãs ao redor do mundo. Sua paixão pelo esporte é inigualável.</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <img src="img/foto card 2.png" class="card-img-top" alt="Imagem 2">
              <div class="card-body">
                <h5 class="card-title">Neymar Jr</h5>
                <p class="card-text">Neymar é um dos jogadores mais talentosos e carismáticos do futebol moderno. Com seu estilo de jogo ousado e dribles impressionantes, ele encanta torcedores em todo o mundo. Além disso, é conhecido por sua criatividade e paixão dentro de campo.</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <img src="img/card3.png" class="card-img-top" alt="Imagem 3">
              <div class="card-body">
                <h5 class="card-title">Messi</h5>
                <p class="card-text">Lionel Messi, considerado por muitos o maior jogador de futebol de todos os tempos, é admirado por sua visão de jogo e habilidade incomparável. Com uma carreira repleta de títulos e prêmios, ele é um símbolo de excelência e humildade no esporte.</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- cards -->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

