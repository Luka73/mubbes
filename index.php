<!DOCTYPE html>
<html lang="pt-br">
  <?php include 'moleculas/head.html' ?>
  <body>

    <!-- Modal -->
    <?php include 'moleculas/modal.html' ?>

    <?php include 'moleculas/navbar.html' ?>
    
    <section class="container-fluid">
      <div class="row bg-pink-light text-white">
        <div class="col-lg-7 p-0">
            <div id="carouselQuartos" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselQuartos" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselQuartos" data-slide-to="1"></li>
                  <li data-target="#carouselQuartos" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/mubbes2.jpg" alt="Primeiro Slide">
                    <div class="carousel-caption">
                      <h3 class="display-4">Amsterdam</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/mubbes3.jpg" alt="Segundo Slide">
                    <div class="carousel-caption">
                        <h3 class="display-4">Califórnia</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/mubbes5.jpg" alt="Terceiro Slide">
                    <div class="carousel-caption">
                        <h3 class="display-4">Dublin</h3>
                      </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselQuartos" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselQuartos" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>
        </div>
        <div class="col-lg-5 p-4 align-self-center">
          <h1 class="display-4">Realize a viagem do seu sonho</h1>
          <p class="lead">A melhor companhia para sua viagem é com a Mubbles, 
            mais de 5.000 mulheres viajando juntas.</p>
            <form action="">
              <div class="input-group input-group-lg">
                  <input type="text" class="form-control" placeholder="E-mail" 
                  aria-label="E-mail" aria-describedby="botao">
                  <div class="input-group-append">
                    <button class="btn btn-pink" type="button" id="botao">Inscreva-se</button>
                  </div>
              </div>
            </form>
        </div>
      </div>
    </section>
    
    <section class="py-5 bg-light text-center">
      <div class="container">
        <div class="my-5">
            <span class="h6 d-block">TUDO DE MELHOR PARA VOCÊ</span>
            <h2 class="display-4 text-pink">Aproveite as Vantagens</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="icone d-flex justify-content-center">
            <img src="img/icones/passaporte.svg" alt="">
          </div>
          <h3>Documentos</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, at?</p>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="icone d-flex justify-content-center">
            <img src="img/icones/passagens.svg" alt="">
          </div>
          <h3>Passagens</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, at?</p>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="icone d-flex justify-content-center">
            <img src="img/icones/translado.svg" alt="">
          </div>
          <h3>Translado</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, at?</p>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="icone d-flex justify-content-center">
              <img src="img/icones/praias.svg" alt="">
            </div>
            <h3>Praias</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, at?</p>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="icone d-flex justify-content-center">
              <img src="img/icones/bagagens.svg" alt="">
            </div>
            <h3>Bagagens</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, at?</p>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="icone d-flex justify-content-center">
              <img src="img/icones/turismo.svg" alt="">
            </div>
            <h3>Turismo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, at?</p>
          </div>    
      </div>

      <a href="planos.html" class="btn btn-pink btn-lg mt-4">Comprar Planos</a>
    </section>
    
    <section id="home-quote" class="p-md-5">
      <blockquote class="blockquote text-center text-white p-md-5 p-3">
        <p class="display-4">
          <em>A felicidade não está na estrada que leva a algum lugar. 
            A felicidade é a própria estrada.</em>
        </p>
        <footer class="blockquote-footer text-white">Bob Dylan</footer>
      </blockquote>
    </section>
    
    <section class="container">
      <div class="my-5 text-center">
        <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
        <h2 class="display-4 text-pink">Perguntas Frequentes</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6" id="perguntas-frequentes" data-children=".pergunta">
          <div class="pergunta py-2">
            <a href="#pergunta1" class="lead text-pink" data-toggle="collapse" data-parent="#perguntas-frequentes" aria-expanded="true" aria-controls="pergunta1">
              É possível cancelar a viagem?
            </a>
            <div class="collapse show" id="pergunta1" role="tabpanel">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, sapiente veniam. 
                Eos, maiores sed. Fugiat aut reiciendis excepturi eos a modi, ducimus quis ab dolore totam. 
                nventore accusantium amet accusamus?</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a href="#pergunta2" class="lead text-pink" data-toggle="collapse" data-parent="#perguntas-frequentes" aria-expanded="true" aria-controls="pergunta2">
              Qual a garantia que eu tenho se perder o voo?
            </a>
            <div class="collapse" id="pergunta2" role="tabpanel">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, sapiente veniam. 
                Eos, maiores sed. Fugiat aut reiciendis excepturi eos a modi, ducimus quis ab dolore totam. 
                Inventore accusantium amet accusamus?</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a href="#pergunta3" class="lead text-pink" data-toggle="collapse" data-parent="#perguntas-frequentes" aria-expanded="true" aria-controls="pergunta3">
              Qual o melhor destino?
            </a>
            <div class="collapse" id="pergunta3" role="tabpanel">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, sapiente veniam. 
                Eos, maiores sed. Fugiat aut reiciendis excepturi eos a modi, ducimus quis ab dolore totam. 
                Inventore accusantium amet accusamus?</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a href="#pergunta4" class="lead text-pink" data-toggle="collapse" data-parent="#perguntas-frequentes" aria-expanded="true" aria-controls="pergunta4">
              Vocês dão desconto para grupos grandes?
            </a>
            <div class="collapse" id="pergunta4" role="tabpanel">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, sapiente veniam. 
                Eos, maiores sed. Fugiat aut reiciendis excepturi eos a modi, ducimus quis ab dolore totam. 
                Inventore accusantium amet accusamus?</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
        </div>
      </div>
      <div class="text-center my-4">
        <p class="small m-1">FALE CONOSCO PARA MAIS DÚVIDAS</p>
        <a href="contato.html" class="btn btn-pink btn-lg">Entre em Contato</a>
      </div>
    </section>
    
    <?php include 'moleculas/footer.html' ?>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <?php include 'moleculas/scripts.html' ?>
    <script src="js/app.js"></script>
  </body>
</html>