<?php
	$AccountCreation = $_GET['date'];
	$Nickname = $_GET['name'];
	$Email = $_GET['e-mail'];
	$TimeSpend = $_GET['timeSpend'];
	try{
		include "conexao.php";

		$sql= "INSERT INTO Player (Nickname, AccountCreation, Email, TimeSpend) VALUES(:Nickname, :AccountCreation, :Email, :TimeSpend)";

		$stmt = $db->prepare($sql);

		$stmt->bindParam(':Nickname', $Nickname);
		$stmt->bindParam(':AccountCreation', $AccountCreation);
		$stmt->bindParam(':Email', $Email);
		$stmt->bindParam(':TimeSpend', $TimeSpend);	

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
