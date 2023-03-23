<?php
	date_default_timezone_set('America/Sao_Paulo');
  	$Data = date('d/m/Y H:i:s');
	$Nome = "";
	$Pontos = 0;
	$Nome = $_GET['Nome'];
	$Pontos = $_GET['Pontos'];

	try{
		include "conexao.php";

		$sql= "INSERT INTO Participantes (Data, Nome, Pontos) VALUES(:Data, :Nome, :Pontos)";

		$stmt = $db->prepare($sql);

		$stmt->bindParam(':Data', $Data);
		$stmt->bindParam(':Nome', $Nome);
		$stmt->bindParam(':Pontos', $Pontos);

		$stmt->execute();

		$stmt = null;
		$db = null;
		echo "Dados recebidos com sucesso!";
	}
	catch (Throwable $t){
		echo "Algo deu errado!";
	}
	catch(PDOException $e){
		echo "Algo deu errado!";
	}
?>