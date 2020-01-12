<?php $bdd=new PDO('mysql:host=localhost;dbname=espace_commentaire','root','',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION)); ?>
<!DOCTYPE html>
<html>
<head>
	<title>InfoNews BLOG</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include("menu.php"); ?>
<?php include("aside.php"); ?>
<section>
	<br>
<aside style="	width:830px;
	font-family: calibri;
	font-size:100%;
	border-style: solid;
	border-color:darkgrey;
	border-radius:10px;
	background-color:white;
	color:black; 
	float:left;">
			<h2>PHP</h2>
		<img src="php.jpg" style="width: 300px">
		<span style="position: absolute; top: 80 px; left: 100 px;">
		Si vous êtes un développeur indépendant ou professionnel,<br> la popularité d’un langage est un excellent critère de sélection.
		<a href="programmation.php" style="text-decoration: none;color: white;background: black;border-radius:10px;border: 2px solid black"><i>Afficher plus</i></a> 
		 </span>
	</aside>
</section>
<?php include("footer.php"); ?>
</body>
</html>