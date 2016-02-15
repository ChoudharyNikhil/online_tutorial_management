 <?php
if($_POST)
{
	$username = $_POST['username']; 
	$password = $_POST['password']; 
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	// Full Name
	if (!preg_match("%[^A-Za-z\s0-9 - @ .]/%",$name)){
		$val_name = $name;
	}else{ 
		$err_name='Please enter valid Name.'; 
	}
 
	// Email
	if (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) {
		$val_email = $email; 
	}else{ 
		$err_email = 'Please enter valid Email.'; 
	}
 
	// Usename min 2 char max 20 char
	if (preg_match('/^[a-z\d_]{2,20}$/i', $username)){
		$val_username = $username;
	}else{ 
		$err_username = 'Please enter valid Username (minimum 3 characters)'; 
	}
 
	// Password min 6 char max 20 char
	if (preg_match("/^[a-z0-9_-]{6,20}$/i", $password)){
		$val_password = $password;
	}else{ 
		$err_password = 'Please enter valid Password (minimum 6 characters)'; 
	}
 
	if((strlen($val_name)>0)&&(strlen($val_email)>0)
			&&(strlen($val_username)>0)&&(strlen($val_password)>0) ){
		header("Location: home.html");
	}else{ }
}
?>