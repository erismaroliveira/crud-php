<h1>Salvar Atendente</h1>
<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $advocacia = $_POST["advocacia_id_advocacia"];
            $atendente = $_POST["nome_atendente"];
        
            $sql = "INSERT INTO atendente (advocacia_id_advocacia, nome_atendente) 
                    VALUES ({$advocacia}, '{$atendente}')";

            $res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert ('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=atendente-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar! :( </div>";
			}
            break;

        case 'editar':
            $advocacia = $_POST["advocacia_id_advocacia"];
            $atendente = $_POST["nome_atendente"];

            $sql = "UPDATE atendente SET advocacia_id_advocacia={$advocacia}, nome_atendente='{$atendente}' WHERE id_atendente=".$_REQUEST["id_atendente"];
            $res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert ('Editado com sucesso');</script>";
				print "<script>location.href='?page=atendente-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar! :( </div>";
			}
            break;

        case 'excluir':
            $sql = "DELETE FROM atendente WHERE id_atendente=".$_REQUEST["id_atendente"];
            $res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert ('Excluído com sucesso');</script>";
				print "<script>location.href='?page=atendente-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir! :( </div>";
			}
            break;
    }


?>