<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO advocacia (nome_advocacia, end_advocacia, tel_advocacia) VALUES ('".$_POST["nome_advocacia"]."','".$_POST["end_advocacia"]."','".$_POST["tel_advocacia"]."')";
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<div class='alert alert-success'>Cadastrado com sucesso! :) </div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar! :( </div>";
			}
			break;

		case 'editar':
			$sql = "UPDATE advocacia SET nome_advocacia='".$_POST["nome_advocacia"]."', end_advocacia='".$_POST["end_advocacia"]."', tel_advocacia='".$_POST["tel_advocacia"]."' WHERE id_advocacia = ".$_REQUEST["id_advocacia"];
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert ('Editado com sucesso');</script>";
				print "<script>location.href='?page=advocacia-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar! :( </div>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM advocacia WHERE id_advocacia = ".$_REQUEST["id_advocacia"];
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert ('Excluído com sucesso');</script>";
				print "<script>location.href='?page=advocacia-consultar';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir! :( </div>";
			}
			break;
	}


?>