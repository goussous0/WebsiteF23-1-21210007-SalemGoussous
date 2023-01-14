<?php

$servername = "localhost";
$username = "admin";
$password= "123_123";
$database = "website";

// checks if users is already in the database
function check_user($user) {

	// $usrname is the user to look for in the database 
	global $servername;
	global $username;
	global $password;
	global $database;
	// connet to database 
	$conn = new mysqli($servername, $username, $password, $database);

	//check errors 
	if (!$conn)
	{
		error_log("Failed to connect to database ");
		return false;
	}

	$sql = "SELECT username FROM users WHERE username='" . $user . "'";
	
	$result = $conn->query($sql);

	if ($result)
	{
		while ($row = $result->fetch_assoc()) 
		{
			if ( $row['username'] == $username)
			{
				$result->free();
				$conn->close();
				return false;
			}
		}
	}
	else
	{
		// failed to query database
		$result->free();
		$conn->close();
		return false;	
	}
}

/*
	takes in username and password and 
	check them against the ones in the database 
*/
function verify_user($user, $pass)
{
	global $username;
	global $password;
	global $servername;
	global $database;

	// connect to the databse 
	$conn = new mysqli($servername, $username, $password , $database);
	if (!$conn)
	{
		error_log("failed to connec to database");
		return false;
	}
	// prep query 
	$sql = "SELECT username, passhash FROM users WHERE username='". $user. "'";
	$result = $conn->query($sql);
	if (!$result)
	{
		error_log("Failed to query user ");
	}
	while ($row = $result->fetch_assoc())
	{
		if ($row['username'] == $user)
		{
			// user found verify password 
			$tmp = hash('sha256', $pass);
			if( $tmp == $row['passhash'])
			{
				error_log("user verified");
				return true;
			}
			else
			{
				error_log("wrong password provided");
				return false;
			}
		}
	}
	$result->free();
	$conn->close();
	return false;
}


function add_user($user, $pass)
{
	global $username;
	global $password;
	global $servername;
	global $database;

	// create connection to db
	$conn = new mysqli($servername, $username, $password, $database);
	if (!$conn)
	{
		error_log("failed to open database");
		return false;
	}

	// prep query
	$sql = "insert into users (username, passhash) values ('".$user."', SHA2('".$pass."', 256));";
	if ($conn->query($sql) === true)
	{
		error_log("Successfully added new user");
		return true;
	}
	else
	{
		error_log("failed to add new users");
		return false;
	}
}



function add_item($case)
{
	switch($case)
	{
		case "CPUSoup": 
		{
			break;
		}
		case "KeyCapSoup": 
		{
			break;
		}
		case "Ethspaghetti": 
		{
			break;
		}
		case "Bruschetta": 
		{
			break;
		}
		case "Transistor": 
		{
			break;
		}
		case "CircuitPizza": 
		{
			break;
		}
		case "ElecPizza": 
		{
			break;
		}
		case "HotDog": 
		{
			break;
		}
		case "Mainboard": 
		{
			break;
		}
		case "LEDspaghetti": 
		{
			break;
		}
																																																															
		default:
		break;
	}
}
function remove_item($case)
{
	switch($case)
	{
		case "CPUSoup": 
		{
			break;
		}
		case "KeyCapSoup": 
		{
			break;
		}
		case "Ethspaghetti": 
		{
			break;
		}
		case "Bruschetta": 
		{
			break;
		}
		case "Transistor": 
		{
			break;
		}
		case "CircuitPizza": 
		{
			break;
		}
		case "ElecPizza": 
		{
			break;
		}
		case "HotDog": 
		{
			break;
		}
		case "Mainboard": 
		{
			break;
		}
		case "LEDspaghetti": 
		{
			break;
		}
																																																															
		default:
		break;
	}
}



?>