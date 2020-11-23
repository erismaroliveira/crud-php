<h1>Consultar Atendente</h1>
<?php
    $sql = "SELECT * FROM atendente AS a INNER JOIN advocacia AS c ON a.advocacia_id_advocacia = c.id_advocacia";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;

    if ($qtd > 0){
        print("<p>Encontrou <b>$qtd</b> resultado(s)</p>");
        print "<table class='table table-striped table-bordered table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th><b>Advocacia</b></th>";
        print "<th><b>Nome do Atendente</b></th>";
        print "<th width='180'><b>Ações</b></th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_atendente."</td>";
            print "<td>".$row->nome_advocacia."</td>";
            print "<td>".$row->nome_atendente."</td>";
            print "<td><button class='btn btn-success' onclick=\"location.href='?page=atendente-editar&id_atendente=".$row->id_atendente."';\">Editar</button><button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=atendente-salvar&acao=excluir&id_atendente=".$row->id_atendente."';}else{false;}\">Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não encontrou resultados.</div>";
    }


?>
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