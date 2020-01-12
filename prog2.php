<!DOCTYPE html>
<html>
<head>
	<title>InfoNews BLOG</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include("menu.php"); ?>
<section id="section">
<br><br>
	<aside>
<?php
	include("aside_article.php"); 
	include("firstaside.php");
	include("aside.php"); 
?>
</aside>
<section id="section_articles">
	<article>
		
		<h2 id="title_articles">Kotlin : pourquoi ce nouveau langage est une bonne nouvelle</h2><br><br>
		<img src="android-kotlin-768x427.jpg" id="imgAfficherPlus"><br>
		<p id="articles" >
		Google a annoncé lors de la keynote de la Google I/O 2017 l’arrivée d’un nouveau langage de programmation pour les applications Android : Kotlin. Une véritable révolution pour les développeurs !<br>
		Android est un système d’exploitation qui va bientôt fêter ses 10 ans. Son architecture fait intervenir différents langages de programmation et la couche la plus proche de l’utilisateur est tout naturellement les applications. Jusqu’à présent, Google ne supportait que le langage Java pour développer les fameuses applications que vous utilisez au quotidien. Il existe plusieurs versions de Java, dont la plus récente est nommée Java 8 (Java 9 étant prévu pour cet été).<br>

Côté Android, le support de Java 8 n’est actuellement qu’en bêta suite à diverses tergiversations de Google sur son intégration. Version de Java qui date de… 2014 ! Mais aujourd’hui le Java est un langage de plus en plus décrié, car des langages modernes l’ont quelque peu ringardisé. Les développeurs iOS n’hésitaient plus à se moquer d’Android, car Apple a développé de son côté son propre langage : Swift.<br>

Des rumeurs circulaient il y a un an sur le support d’un nouveau langage pour compléter Java. Mais lors de la Google I/O 2016, nous avons eu droit à un silence radio. Les ingénieurs de Google avaient alors nié en bloc l’utilisation de Swift, bien que le langage soit open source.<br>

Mais cette édition de la Google I/O a généré un grand soulagement chez les développeurs Android, puisque le support de Kotlin a été officialisé. Ce langage de programmation développé par JetBrains (à qui l’on doit notamment IntelliJ, l’environnement qui sert de base à Android Studio) est déjà utilisé par certains développeurs depuis plusieurs mois/années, malgré l’absence de support officiel.<br>
		
	</p>
	</article>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br>
</section><br><br>

<?php include("footer.php"); ?>
</section>
</body>
</html>