<?php 
	$xml=simplexml_load_file("Data.xml");
	$users = $xml->user;
	$flag=false;
	foreach($users as $user){
		if($user==$users->username && $password==$users->password && $users->type == "user")
		{
			$flag = true;

		}

		else
		{
			$flag=false;
		}
		
	}


	if($flag){
		header("Location: Dashboard.php");
	}else{
		echo "Invalid credentiails";
	}


 ?>

