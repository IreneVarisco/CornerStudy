<?php
	$psw=$_POST["psw"];
	$nome=$_POST["username"];

	if(empty($_POST)) {
		die();
	}else{
		$conn = new mysqli('varisco.irene.tave.osdb.it', 'c145_varisco', $psw, 'c145_login');		//cambiare i dati :)
				
		if ($conn ->connect_error) {
			die('Connect Error: '.$conn ->connect_error);
		}else{
			$accesso= $conn ->query("select * from accesso where nome = '".$nome."' AND psw = '".$psw."'");
					
		}
	}
?>