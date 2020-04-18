<?php

function usernameCheck($username) { 
	$upper = preg_match('/@[a-z]{2,12}$/', $username);
	
if($upper || strlen($username) >= 2 && strlen($username) <= 12) {
	echo "Username		: ".$username."</BR>";
	$bool = true;
    echo "return ".json_encode($bool);
} else if ($upper || strlen($username) > 12) {
	echo "Username		: ".$username."</BR>";
	$bool = false;
	echo "return ".json_encode($bool);
} else {
	echo "Username		: ".$username."</BR>";
	$bool = false;
	echo "return ".json_encode($bool);
}
}

function passwordCheck($password) {
	$check = preg_match('/^[0-9]{6,6}$/', $password);
	
if($check) {
	echo "Password 		: ".$password."</BR>";
	$bool = true;
	echo "return ".json_encode($bool);
} else {
	echo "Password		: ".$password."</BR>";
	$bool = false;
	echo "return ".json_encode($bool);
}	
}

echo "</BR>".usernameCheck("@koders")."</BR>";
echo "</BR>".usernameCheck("@programmerhandal")."</BR>";
echo "</BR>".passwordCheck("212223")."</BR>";
echo "</BR>".passwordCheck("2!2a3B")."</BR>";