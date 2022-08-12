<?php
include_once("function.php");

$name = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	
	
	if (empty($_POST["name"])) {
	  echo "Name is required";
	} else {
	  $name = ($_POST["name"]);
	  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		echo "Only letters and white space allowed";
	  }
	}
	if (empty($_POST["pwd"])) {
		echo "password is required";
	}
     

	$var = $obj->log();
    
	print_r ("----".$var);
	if($var==1){
		echo "Go";
		header('location:Success.php');
	}else{
		echo "not work";
	}
}      
?>
<form action="#" method="POST">
<html>
	<h3>Login :</h3>
	<table>
		<tr>
			<td>
				Username:
			</td>
			<td>
			<input type="text" name="name" required>
			</td>
		</tr>

		<tr>
			<td>
				Password:
			</td>
				<td>
				<input type="password" name="pwd" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="login" name="log">
			</td>
		</tr>
	</table>
</html>
</form>
