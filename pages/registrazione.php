<?php
	require '../assets/config.php';

	$username = $_POST['usernamer'];
	$password = $_POST['passwordr'];
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$email = $_POST['email'];
	$data = $_POST['data'];
	$citta = $_POST['cit'];



		// to change all the stuff underneath

	if(empty($_POST)) {
		die();
	}else{
		$conn = new mysqli('colombo2.tommaso.tave.osdb.it', 'c121_CornerStudy', 'cornerstudy', 'c121_CornerStudy');		//cambiare i dati :)
				
		if ($conn ->connect_error) {
			die('Connect Error: '.$conn ->connect_error);
		}else{
			$accesso= $conn ->query("select * from accesso where nome = '".$nome."' AND psw = '".$psw."'");     //modificare, questo è il login-->fare registrazione con hash per le password
					
		}
	}
?>