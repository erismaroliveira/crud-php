<h1>Editar Advocacia</h1>
<?php
    $sql = "SELECT * FROM advocacia WHERE id_advocacia = ".$_REQUEST["id_advocacia"];
    $res = $conn->query($sql) or die($conn->error);
    $row = $res->fetch_object();
?>
    <form action="?page=advocacia-salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_advocacia" value="<?php print $row->id_advocacia; ?>">
        <div class="form-group">
            <label>Nome da Advocacia</label>
            <input type="text" name="nome_advocacia" value="<?php print $row->nome_advocacia; ?>" class="form-control">
            <label>Endereço da Advocacia</label>
            <input type="text" name="end_advocacia" value="<?php print $row->end_advocacia; ?>" class="form-control">
            <label>Telefone da Advocacia</label>
            <input type="text" name="tel_advocacia" value="<?php print $row->tel_advocacia; ?>" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>