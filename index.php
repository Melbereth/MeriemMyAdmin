<!DOCTYPE html>
<html dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <fieldset>
    <legend>Tables</legend>
    <form class="" action="require.php" method="post">
    <div id="creat">
      <label for="table">Creer la table</label>
      <input type="text" name="nomtable" value="" placeholder="Nom de table">
      <input type="submit" name="creer" value="CREER">
    </div>
  </fieldset>
  <fieldset>
    <legend>Colonnes</legend>
    <div id="add">
      <label for="ajouter">Ajouter colonne</label>
      <input type="text" name="latable" value="" placeholder="Nom de la table">
      <input type="text" name="ajouter" value="" placeholder="Nom de la colonne">
      <select class="type" name="typecol">
          <option value="int">INT</option>
          <option value="varchar(255)">VARCHAR</option>
          <option value="text">TEXT</option>
          <option value="date">DATE</option>
      </select>
      <input type="submit" name="adcol" value="AJOUTER">
    </div>
    <div id="change">
      <label for="modif">Modifier colonne</label>
      <input type="text" name="latable1" value="" placeholder="Nom de table">
      <input type="text" name="modifier" value="" placeholder="Nom de la colonne">
      <input type="text" name="newmodif" value="" placeholder="Nouveau Nom">
      <select class="type" name="typecolmod">
          <option value="int">INT</option>
          <option value="varchar(255)">VARCHAR</option>
          <option value="text">TEXT</option>
          <option value="date">DATE</option>
      </select>
      <input type="submit" name="colmod" value="MODIFIER">
    </div>
    <div id="delete">
      <label for="Supp">Supprimer colonne</label>
      <input type="text" name="tatable" value="" placeholder="Nom de table">
      <input type="text" name="supcol" value="" placeholder="Nom de la colonne">
      <input type="submit" name="supprimer" value="SUPPRIMER">
    </div>
  </form>
  </fieldset>
  <fieldset>
    <legend>Lignes</legend>
    <form class="" action="require2.php" method="post">
      <div>
          <label for="ajoutligne">Ajouter ligne</label>
          <input type="text" name="theta" value="" placeholder="Nom de table">
          <input type="text" name="thecol" value="" placeholder="Nom de la colonne">
          <input type="text" name="laligne" value="" placeholder="Nouveau Nom">
          <input type="submit" name="ajout" value="AJOUTE TA LIGNEEE">
      </div>

      <div>
          <label for="modligne">Modifier ligne</label>
          <input type="text" name="latataa" value="" placeholder="Nom de table">
          <input type="text" name="thecoll" value="" placeholder="Nom de la colonne">
          <input type="text" name="newligne" value="" placeholder="Nouveau Nom">
          <input type="text" name="idligne" value="" placeholder="id">
          <input type="submit" name="modlignee" value="Modifier ligne">
      </div>

      <div id="deleteligne">
        <label for="Supp">Supprimer ligne</label>
        <input type="text" name="tatable" value="" placeholder="Nom de table">
        <input type="text" name="suppligne" value="" placeholder="id">
        <input type="submit" name="supligne" value="SUPPRIMER">
      </div>
    </fieldset>
    <fieldset>
      <legend>Game Over</legend>
      <div id="delete">
          <label for="Sup">Supprimer la table</label>
          <input type="text" name="suptable" value="" placeholder="Nom de table">
          <input type="submit" name="supprimer" value="SUPPRIMER">
      </div>
    </fieldset>

  </form>

</body>
</html>
