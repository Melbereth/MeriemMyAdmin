<?php

require ('Table.php');

$table = New Table();

  // Creation table
if (isset($_POST['creer'])) {
  $table->creation($_POST['nomtable'],'id');
} // Creation Colonne
else if (isset($_POST['adcol'])){
  $table->colonne($_POST['latable'],$_POST['ajouter'],$_POST['typecol']);
} // Modifier Colonne
else if (isset($_POST['colmod'])) {
  $table->modifdif($_POST['latable1'],$_POST['modifier'],$_POST['newmodif'],$_POST['typecolmod']);
} // Supprimer Colonne
else if (isset($_POST['supprimer'])) {
  $table->suppcol($_POST['tatable'],$_POST['supcol']);
}

 ?>
