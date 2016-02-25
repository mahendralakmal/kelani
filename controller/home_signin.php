<?php
session_start();
require_once '../config.php';

if(isset($_POST['btn-login']))
{
	$username = trim($_POST['username']);
	$password = md5(trim($_POST['password']));
	error_log('----> user '.$username.' pass '.$password );

	try
	{
//		$_SESSION['user_session'] = null;
//		$_SESSION['username'] = null;

		$stmt = $db_con->prepare("SELECT * FROM user_tbl WHERE Username='".$username."'");
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$count = $stmt->rowCount();
		error_log(json_encode($row));

		if($row['Password']==$password){

			echo "ok"; // log in
			$_SESSION['user_session'] = "loged";
			$_SESSION['username'] = $username;
			//error_log('----> user_session '.$_SESSION['user_session'].' username '.$_SESSION['username'] );
		}
		else{

			echo "email or password does not exist."; // wrong details
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

?>