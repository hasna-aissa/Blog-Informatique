<?php

$bdd = new PDO("mysql:host=127.0.0.1;dbname=espace_commentaire;charset=utf8","root","root123");
if(isset($_POST['message']) AND isset($_POST['email'])  AND !empty($_POST['message']) AND !empty($_POST['email']))
{
$Message=htmlspecialchars($_POST['message']);
$email=htmlspecialchars($_POST['email']);
$insertmsg = $bdd->prepare('INSERT INTO contact(emailContact,textContact) VALUES(?,?)');
$insertmsg->execute(array($email,$Message)); 
}
/*
if($_POST){
$name=$_POST['pseudo'];
$commentaire=$_POST['commentaire'];
$handle= fopen("commentaires (1).php", "a");
fwrite($handle, "<strong>". $name . "</strong>:<br/>" . $commentaire . "<br/>");
fclose($handle);
}*/
?>
<!DOCTYPE>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Script HTML-CSS Apparition avec restriction page : Outils-web.com</title>
<meta name="description" content="Lors de l'affichage de la fenÃªtre modale la page source se contracte pour augmenter l'effet de zoom" />
<meta name="Robots" content="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/avgrund.css">
<script>
	function openDialog() {	Avgrund.show( "#default-popup" );}
	function closeDialog() {  Avgrund.hide();}
</script>
</head>
<body>
		<aside id="default-popup" class="avgrund-popup" style="background: black">
			<h2 style="text-align: center;color: #20B2AA">Contactez nous :</h2><br>
			<form method="POST" action="">
	<fieldset style="border: 1px solid black">
	
	<input type="email" name="email" placeholder="Entrez votre Email" id="input" style="padding: 10px 20px 10px;background: black;color: white" required /><br><br>
	<textarea name="message" placeholder="Votre message........." id="textarea" style="background: black;color: white" rows="12" cols="60" required></textarea><br/><br>
	<input type="submit" value="Envoyer" name="submit_commentaire"  id="commentaire" style="background: #ADD8E6;box-shadow: 5px #ADD8E6;padding: 0px 10px 10px;margin-left: 368px;font-family: arial;color: grey"  />
	</fieldset>
	
</form>
			
		</aside>
		<article class="avgrund-contents">
			<button onclick="javascript:openDialog();">Contacter nous </button>
		</article>
<div class="avgrund-cover"></div>
<script type="text/javascript" src="js/avgrund.js"></script>
</body>
</html>