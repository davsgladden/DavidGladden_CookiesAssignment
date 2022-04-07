<?php
    $dsn = 'mysql:host=wb39lt71kvkgdmw0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=upu87li4nwd2xs0i';
    $username = 'fgoh8u9dq5i6mwse';
    $password = 'jiwjvyytjs6pugvb';
    //$dsn = 'mysql:host=localhost; dbname=zippyusedautos';
	$//username = 'root';
	//$password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('view/error.php');
        exit();
    }
?>
