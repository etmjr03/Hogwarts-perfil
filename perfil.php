<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil Bruxo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1 class="titulo">Olá Bruxo(a), seja bem-vindo(a)!</h1>
    
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="form-perfil">
          <img class="brasao-casa" src="./imagens/brasao-hogwarts.png" alt="Brasão da casa">
          <form action="" method="post">
            <h3 class="text-center">Seu perfil Bruxo</h3>
            <div class="row">
              <div class="perfil-bruxo">
                <img src="./imagens/bruxa-hogwarts.jpg" class="imagem-perfil" alt="">
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <input type="file" class="input-imagem-perfil" name="" id="form-imagem">
              <label for="form-imagem" id="label-form-imagem">
                Selecione sua foto
                <img class="icone-imagem-perfil" src="./imagens/imagem-perfil.svg" alt="">
              </label>
            </div>
            <div class="row">
              <label for="" class="text-center">Seu nome bruxo</label>
              <input type="text" class="mb-3" name="nome" id="">
            </div>
            <div class="row">
              <label for="" class="text-center">Sua matéria preferida</label>
              <input type="text" class="mb-3" name="materia" id="">
            </div>
            <div class="row">
              <label for="" class="text-center">Sua magia preferida</label>
              <input type="text" class="mb-3" name="magia" id="">
            </div>
            <div class="row">
              <label for="" class="text-center">Seu patrono</label>
              <input type="text" class="mb-3" name="patrono" id="">
            </div>
            <div class="row dp-flex mt-3 mb-3">
              <p class="text-center">Descubra qual é sua casa de Hogwarts clicando no 
                <span class="texto-chapeu-seletor">chapéu seletor!<span>
              </p>
              <a class="text-center" href="#">
                <img class="icone-chapeu-seletor" src="./imagens/chapeu-seletor.svg" alt="">
              </a>
            </div>
            <div class="row d-flex justify-content-center">
              <button class="botao-perfil">Enviar</button>
            </div>           
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>