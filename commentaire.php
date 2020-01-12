<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=espace_commentaire;charset=utf8","root","root123");
if(isset($_POST['Nom'])AND isset($_POST['commentaire']) AND isset($_POST['Email']) AND isset($_POST['siteweb']) AND !empty($_POST['Nom']) AND !empty($_POST['commentaire']) AND !empty($_POST['Email'])
AND !empty($_POST['siteweb']))
{
$nom=htmlspecialchars($_POST['Nom']);
$commentaire=htmlspecialchars($_POST['commentaire']);
$email=htmlspecialchars($_POST['Email']);
$site=htmlspecialchars($_POST['siteweb']);
$insertmsg = $bdd->prepare('INSERT INTO commentaire(Nom,commentaire,Email,siteweb,date_post) VALUES(?,?,?,?,NOW())');
$insertmsg->execute(array($nom,$commentaire,$email,$site)); 
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
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >

<form method="POST" action="">
<fieldset id="field">
		<h3 id="laissecomm">Laisser un commentaire </h3><br>
	<h5 id="votreaddr">Votre adresse de messagerie ne sera pas publiée.Tous  Les champs sont obligatoires</h5><br>
	<input type="text" name="Nom" placeholder=" Nom" id="input" required />
	<input type="email" name="Email" placeholder=" Email" id="input" required />
	<input type="url" name="siteweb" placeholder=" site web" id="input" /><br>
	<textarea name="commentaire" placeholder="votre commentaire.." rows="12" cols="110" id="textarea" required></textarea><br/><br>
	<input type="submit" value="poster mon commentaire" name="submit_commentaire"  id="commentaire" />
	</fieldset>
	
</form>
<?php
$allmsg=$bdd->query('SELECT * FROM commentaire');
while ($commentaire =$allmsg->fetch()) {
?>
<img src="photo/comm.PNG" style="width: 5%;height: 5%;margin-left: 30px">
<span style="color: #808080;position: absolute;font-family: Andalus;font-size: 20px">
	<strong><?php echo $commentaire['Nom'].'';?></strong><br>
	<div style="font-size: 10px"><?php
	 echo $commentaire['date_post'].'';?></div><br>
</span>
<div style="margin-left: 30px;font-family: time new roman;font-size: 25px"><?php echo $commentaire['commentaire']; ?></div><br>
<?php
}
?>

</body>
</html>