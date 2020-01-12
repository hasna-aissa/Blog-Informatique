<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=espace_commentaire;charset=utf8","root","");
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

<?php
$allmsg=$bdd->query('SELECT * FROM article WHERE categorie="intelligence"');
while ($article =$allmsg->fetch()) {
?>
<span>
	<strong><?php echo $article['article'].'';?></strong><br>
	<?php echo $article['article_date'].'';?><br>
</span> <br>
<?php
}
?>

</body>
</html>