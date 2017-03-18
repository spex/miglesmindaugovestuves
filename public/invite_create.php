<?php
	require 'database.php';
	
	if( !empty($_POST)) {
         
        // keep track post values
        $name = $_POST['name'];
        $willAttend = $_POST['willAttend'];
         
        // validate input
        $valid = true;
        if (empty($name)) {
            $err -> name = 'Įveskite savo vardą';
            $valid = false;
        }

        if (empty($willAttend)) {
            $err -> willAttend = 'Pasirinkite ar galėsite dalyvauti.';
            $valid = false;
        }
 
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO invites (name, will_attend) values(?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$willAttend == 'Yes'));
            Database::disconnect();
            echo('{"success": true}');
        } else {
			$err -> success = false;
			echo(json_encode($err, JSON_UNESCAPED_UNICODE));
		}
    }
?>