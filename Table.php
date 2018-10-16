<?php

class Table {

  private $bdd;
  public $nomTable;
  public $id;


  public function __construct(){


    try {
      $this->bdd = new PDO('mysql:host=192.168.3.125;dbname=meriem;charset=utf8', 'root', 'sqlcoda#2018!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    }

    catch (PDOException $e) {

      echo 'Connexion échouée : ' . $e->getMessage();

    }

  }
// Creation table
  public function creation($nomTable,$id){

    $this->nomTable = 'nomtable';
    $this->id = $id;


    try {


      $reponse = $this->bdd->prepare("CREATE TABLE $nomTable (
        $id INT PRIMARY KEY NOT NULL

      )");

      $reponse->execute();

      echo "Elle est créée!";


    }

    catch(PDOException $e) {


      IF ($e->errorInfo[1] == 1050) {
        echo $e->errorInfo[2];
      } else {
        echo "Putain, je m'appelle Germaine!";
      }
    }


  }
// Creation Colonne
  public function colonne($laTable,$new, $typecol) {

    try {
      $col = $this->bdd->prepare(

        "ALTER TABLE $laTable ADD $new $typecol "
      );

      $col->execute();
      echo "Elle est la!";
    } catch(PDOException $e) {

      echo " ce que tu veux ";

    }

  }
// Modifier Colonne
  public function modifdif($laTatable, $oldNom, $newNom, $typemod) {

    try {


      $mod = $this->bdd->prepare(

        "ALTER TABLE $laTatable CHANGE $oldNom $newNom $typemod"

      );

      $mod->execute();
      echo "Elle est la aussi!";

    } catch(PDOException $e) {

      echo " ben non";

    }

  }
// Supprimer Colonne
  public function suppcol($taTable, $supCol) {

    try {


      $sup = $this->bdd->prepare(

        "ALTER TABLE $taTable DROP $supCol"

      );

      $sup->execute();

    } catch(PDOException $e) {

      echo " noooooon fait pas çaaaaaaa";

    }

  }
// Creation ligne
  public function addligne($tablee, $nomcol, $newligne) {


    try {

      $addouille = $this->bdd->prepare(
        "INSERT INTO $tablee($nomcol) VALUES ('$newligne')"
      );

      $addouille->execute();
      echo "Et biiiim";

    } catch (\Exception $e) {

      echo "Newton vous m'entendez?";

    }



  }
// Modifier ligne
  public function modligne($table, $col, $newligne, $idligne) {

    try {
      $moud = $this->bdd->prepare(
        "UPDATE $table SET $col = '$newligne' WHERE id =$idligne"
      );
      $moud->execute();
      echo "mouv de la  ";
    } catch (\Exception $e) {
      echo "Je bouge passss  ";
    }
  }
// Supprimer ligne
  public function supligne($tatablee, $lign) {

    try {

      $lign = $this->bdd->prepare (
        "DELETE FROM $tatablee WHERE id =$lign"

      );

      $lign->execute();
      echo "    Tatoufaittt";


    } catch (\Exception $e) {
      echo "Rame encore  ";
    }

  }
  // Supprimer Table
  public function suptable($suptable) {
      try {

        $supt = $this->bdd->prepare(
          "DROP TABLE $suptable"
        );

        $supt->execute();
        echo "Elle est diiiiie";

      } catch (\Exception $e) {
        echo "Whyyyyyyyyyyyyyyyyyyy!?";
      }

    }


}



?>
