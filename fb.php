<!DOCTYPE html>
<html>
<head>
	<title>InfoNews blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include("menu.php"); ?>
	<aside>
		<?php include("firstaside.php"); ?>
	<?php include("aside.php"); ?>
	</aside>
	
	<section>
	<br>
	<article style="text-align: justify;">
<aside  id="aside_article" ><br><br><br>
		<div id="titre_article"><strong>La nouvelle intelligence artificielle de Facebook vous ouvre les yeux</strong></div>
		
		<p  id="firstp"><strong>Pour faire montre du potentiel du machine learning et de l’intelligence artificielle, Google a mis en place un mini-jeu qui ne vous demandera qu’un smartphone équipé d’une caméraet d’une connexion internet.
		Pour participer à cette petiteexpérience ludique, rien de plus simple : il vous suffit simplement de vous connecter... </p></strong>
		
		<img src="photo/yeuxfacebook.jpg" style="align-items:  justify;" ><br><br>
		<span id="article2">
		C’est un classique sur les photos de groupe, il y a toujours au moins une personne qui a les yeux fermés. Facebook a publié le 17 juin, un rapport de 10 pages où il présente une intelligence artificielle pour régler le problème. Celle-ci s’entraîne avec des photos sur lesquelles la personne a les yeux ouverts. L’algorithme analyse les yeux qui correspondent au visage, leur forme, leur couleur ainsi que d’autres caractéristiques. Une fois qu’elle a vu assez d’exemples, elle remplace les yeux fermés par des yeux ouverts ayant la bonne forme. Des tests avec des photos modifiées et réelles ont ensuite été réalisés. Les enquêtés ont soit confondu les photos modifiées avec les vraies, soit pas su déterminer si la photo avait été modifiée ou non. 
Pour son intelligence artificielle, Facebook utilise un « réseau antagoniste génératif » (generative adversarial network) pour modifier les images. Il s’agit d’un système d’apprentissage automatique (machine learning) dont le but est de faire croire que ses propres créations sont réelles. La partie appelée générateur propose une image tandis que la seconde, le discriminateur, détermine si elle est réelle ou pas. Il continue d’améliorer l’image modifiée jusqu’à ce que le premier détermine qu’elle est réelle.


		 </span>
		
	</aside></article>
		
</section>
 <?php include("commentaireH(1).php"); ?>
<?php include("footer.php"); ?>



</body>
</html>