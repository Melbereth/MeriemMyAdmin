<?php

require ('Table.php');

$tatable = New Table();

// Supprimer Table
if (isset($_POST['supprimer'])) {
  $tatable->suptable($_POST['suptable']);
} // Creation ligne
else if (isset($_POST['ajout'])) {
  $tatable->addligne($_POST['theta'], $_POST['thecol'],$_POST['laligne']);
} // Modifier ligne
else if (isset($_POST['modlignee'])) {
  $tatable->modligne($_POST['latataa'],$_POST['thecoll'],$_POST['newligne'], $_POST['idligne']);
} // Supprimer ligne
else if (isset($_POST['supligne'])) {
  $tatable->supligne($_POST['tatable'],$_POST['suppligne']);
}







 ?>
