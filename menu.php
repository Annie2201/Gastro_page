<?php
include 'un.html';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
</head>
<body>
  <?php 
  $base=new PDO('mysql:HOST=localhost;dbname=restaurant','root','root');
  $reponse = $base->query('SELECT * FROM plats  JOIN categorie ON plats.ID_CATEGORIE=categorie.ID_CATEGORIE');
  ?>
<table border=1>
<?php 
  while ($donnees = $reponse->fetch())
  {
?>
<tr>
   <td> <?php echo $donnees ['ID_PLATS']; ?></td>
   <td> <?php echo $donnees ['NOM']; ?></td>
   <td> <?php echo $donnees ['NOMS']; ?></td>
   <td> <?php echo $donnees ['PRIX_UNITAIRE']; ?></td>
   <td> <?php echo $donnees ['TEMPS_ATTENTE']; ?></td>
</tr>
<?php
}
?>
</table><br><br>
</body>
</html>