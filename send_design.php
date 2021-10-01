<?php
// on inclut ici aussi notre fichier design.php
include('design.php');

$expire = 365 * 24 * 3600;
// on envoie notre cookie de nom DESGIN (donc il sera utilisable via la variable $DESIGN) contenant la couleur choisie (c'est-à-dire le contenu de la variable $couleur)
setcookie("DESIGN", $_POST['couleur'], time() + $expire);
?>
<html>

<head>
    <title>Changement de couleur</title>
</head>
<?php
// on utilise les variables du fichier design.php pour pouvoir afficher les bonnes couleurs suivant la couleur du cookie (ou bien la couleur par défaut si le cookie n'existe pas)
echo '<body bgcolor = "',$background,'">';
echo '<img src = "',$logo,'">';
?>
<br /><br />
Vous avez choisi un site de couleur :
<?
echo $_POST['couleur'];
?>
<br /><br />
<!-- on affiche notre formulaire permettant de revenir à l'accueil du site -->
<form action="index.php" method="post">
    <input type="submit" value="Retour accueil">
</form>

</body>


</html>