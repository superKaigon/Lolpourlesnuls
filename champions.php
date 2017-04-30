<?php
	$VALEUR_hote = "localhost"; 
	$VALEUR_port = "port";
	$VALEUR_nom_bd = "leagueoflegends";
	$VALEUR_user = "root";
	$VALEUR_mot_de_passe = "";
	$connexion = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);
	$reponse = $connexion->query("SELECT nom, description, id, image, miniature FROM champions");
	$donnee = $reponse->setFetchMode(PDO::FETCH_OBJ);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="collection">
	<?php while ($donnee = $reponse->fetch()){
		?>
        <a href="#!" class="collection-item">
        	<img src="<?php
        	print_r($donnee->miniature)."</br>";
        	?>">
        </a>
        <?php
    		}
        ?>
      </div>