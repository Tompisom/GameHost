<?php
$database_name = "UnityDataBase.accdb"; 
if (!file_exists($database_name)) {
    die("Nao foi possivel encontrar o arquivo.");
}
try {
     $db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; Dbq=$database_name; Uid=Admin; Pwd=;");
	 if (empty($db)){
		header("location:Ipiranga.php");
		exit;
	 }
     $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch (Throwable $t){
	 header("location:Ipiranga.php");
}
catch(PDOException $e){
	 header("location:Ipiranga.php");
     //echo "Falha na Conex�o: " . $e->getMessage();
}
?>