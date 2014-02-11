<?php
/*Ouvre le fichier et retourne un tableau contenant une ligne par élément*/
$lines = file('programmeligne');
echo $lines;
/*On parcourt le tableau $lines et on affiche le contenu de chaque ligne précédée de son numéro*/ //'<li><a href="https://nsa-observer.laquadrature.net/category/family/'.$lineContent.' > $lineContent </a> </li>'



foreach ($lines as $lineNumber => $lineContent){
	echo '<li><a href="https://nsa-observer.laquadrature.net/'.$lineContent.'" > '.$lineContent.' </a> </li>';
}
?>
