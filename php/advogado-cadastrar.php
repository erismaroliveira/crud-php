<h1>Cadastrar Advogado</h1>

<form action="?page=advogado-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
        <label>Nome do Advogado</label>
        <input type="text" placeholder="Nome" name="nome_advogado" class="form-control">
        <label>OAB do Advogado</label>
        <input type="text" placeholder="Inscrição OAB" name="oab_advogado" class="form-control">
        <label>Especialidade do Advogado</label>
        <input type="text" placeholder="Especialidade" name="especialidade_advogado" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>
<footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (61)3546-7070</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> contato@guiadosadvogados.com.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Venha nos fazer uma visita:</span> QNM 04 CONJUNTO P LOJA 01 - CEILÂNDIA NORTE - DF</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <p>Desenvolvido por <a href="#" target="_blank">Guia dos Advogados</a> &copy; 2020</p>
            </div>
        </div>
      </div>
    </div>
  </footer>