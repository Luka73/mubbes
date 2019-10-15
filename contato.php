<!DOCTYPE html>
<html lang="pt-br">
  <?php include 'moleculas/head.html' ?>
  <body>

    <!-- Modal -->
    <?php include 'moleculas/modal.html' ?>

    <?php include 'moleculas/navbar.html' ?>

    <section class="container">
        <div class="my-5 text-center">
            <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
            <h2 class="display-4 text-pink">Fale Conosco</h2>
        </div>
        <div class="row">
            <div class="col-lg mb-5">
                <form class="bg-light rounded p-4 box-shadow">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-pink">Enviar Mensagem</button> 
                </form>
            </div>
            <div class="col-lg">
                <h2 class="h6">NOSSO ENDEREÇO</h2>
                <a href="#"><img src="img/mapa.png" class="img-fluid box-shadow rounded mb-4" alt=""></a>
                <h2 class="h6">DADOS DE CONTATO</h2>
                <ul class="list-unstyled text-secondary">
                    <li>contato@mubbes.com</li>
                    <li>21 99999-9999</li>
                    <li>De Seg. a Sex. das 8:00h às 18:00h</li>
                </ul>

                <h2 class="h6">REDES SOCIAIS</h2>   
                <ul class="list-unstyled">
                    <li class="d-inline"><a href="https://www.facebook.com/mubbes/" class="btn btn-outline-pink btn-md mr-2 medias">Facebook</a></li>
                    <li class="d-inline"><a href="https://www.linkedin.com/company/mubbes/" class="btn btn-outline-pink btn-md mr-2 medias">LinkedIn</a></li>
                    <li class="d-inline"><a href="https://www.instagram.com/mubbes.web/?hl=pt-br" class="btn btn-outline-pink btn-md mr-2 medias">Instagram</a></li>
                </ul>
            </div>
        </div>
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
  </body>
</html>