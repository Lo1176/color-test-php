<?php
// on inclut le fichier design.php
include('design.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Changement de Couleur</title>
</head>

<body>
    <?php
    // on utilise les variables du fichier design.php pour pouvoir afficher la couleur du cookie (ou la couleur par défaut)
    echo '<body bgcolor = "', $background, '">';
    echo '<img src = "', $logo, '">';
    ?>
    <br /><br />
    Voici un formulaire pour choisir la couleur du site:<br />
    <!-- on affiche notre formulaire permettant de choisir la couleur du site -->
    <form action="send_design.php" method='post'>
        <select name="couleur" id="">
            <option>bleu</option>
            <option>rouge</option>
            <option>vert</option>
        </select>
        <input type="submit" value="Modifier" id="">
    </form>
</body>

</html>