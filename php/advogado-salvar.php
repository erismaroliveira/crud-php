<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO advogado (nome_advogado, oab_advogado, especialidade_advogado) VALUES ('".$_POST["nome_advogado"]."','".$_POST["oab_advogado"]."','".$_POST["especialidade_advogado"]."')";
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<div class='alert alert-success'>Cadastrado com sucesso! :) </div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar! :( </div>";
			}
			break;

		case 'editar':
			$sql = "UPDATE advogado SET nome_advogado='".$_POST["nome_advogado"]."', oab_advogado='".$_POST["oab_advogado"]."', especialidade_advogado='".$_POST["especialidade_advogado"]."' WHERE id_advogado = ".$_REQUEST["id_advogado"];
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert ('Editado com sucesso');</script>";
				print "<script>location.href='?page=advogado-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar! :( </div>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM advogado WHERE id_advogado = ".$_REQUEST["id_advogado"];
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert ('Excluído com sucesso');</script>";
				print "<script>location.href='?page=advogado-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir! :( </div>";
			}
			break;
	}


?>