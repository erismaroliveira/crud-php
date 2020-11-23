<h1>Editar Advogado</h1>
<?php
    $sql = "SELECT * FROM advogado WHERE id_advogado = ".$_REQUEST["id_advogado"];
    $res = $conn->query($sql) or die($conn->error);
    $row = $res->fetch_object();
?>
    <form action="?page=advogado-salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_advogado" value="<?php print $row->id_advogado; ?>">
        <div class="form-group">
            <label>Nome do Advogado</label>
            <input type="text" name="nome_advogado" value="<?php print $row->nome_advogado; ?>" class="form-control">
            <label>OAB do Advogado</label>
            <input type="text" name="oab_advogado" value="<?php print $row->oab_advogado; ?>" class="form-control">
            <label>Especialidade</label>
            <input type="text" name="especialidade_advogado" value="<?php print $row->especialidade_advogado; ?>" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>