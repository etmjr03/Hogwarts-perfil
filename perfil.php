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
    <h1 class="titulo">Olá Bruxo, seja bem-vindo(a)!</h1>
    
    <div class="container">
      <div class="d-flex justify-content-center">
        <h2>Suas características!</h2>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="form-perfil">
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
              <input type="text" class="mb-3" name="" id="">
            </div>
            <div class="row">
              <label for="" class="text-center">Sua matéria preferida</label>
              <input type="text" class="mb-3" name="" id="">
            </div>
            <div class="row">
              <label for="" class="text-center">Sua magia preferida</label>
              <input type="text" class="mb-3" name="" id="">
            </div>
            <div class="row">
              <label for="" class="text-center">Seu patrono</label>
              <input type="text" class="mb-3" name="" id="">
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