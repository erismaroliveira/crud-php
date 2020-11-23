<h1>Editar Atendente</h1>
<?php
    $sql_principal = "SELECT * FROM atendente WHERE id_atendente = ".$_REQUEST["id_atendente"];
    $res_principal = $conn->query($sql_principal) or die($conn->error);
    $row_principal = $res_principal->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_atendente" value="<?php print $_REQUEST["id_atendente"];?>">
    <div class="form-group">
    <label>Advocacia</label>
    <?php
	$sql = "SELECT * FROM advocacia";
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
        print "<select name='advocacia_id_advocacia' class='form-control'>";
        print "<option>-= Selecione =-</option>";
		while($row = $res->fetch_object()){
            if($row_principal->advocacia_id_advocacia == $row->id_advocacia){
                print "<option selected value='".$row->id_advocacia."'>".$row->nome_advocacia."</option>";
            }else{
                print "<option value='".$row->id_advocacia."'>".$row->nome_advocacia."</option>";
            }
        }
        print "</select>";
	}else{
		print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
    }
    
    ?>
    </div>
    <div class="form-group">
        <label>Nome do atendente</label>
        <input type="text" name="nome_atendente" value="<?php print $row_principal->nome_atendente; ?>" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>