

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commander</title>
    <link rel="stylesheet" href="comm.css">
</head>
<body>
    <?php
        include 'un.html';
        $base=new PDO('mysql:HOST=localhost;dbname=restaurant','root','root');
    ?>

    <form action="" method="GET">
        <label>PLAT :</label><input type="number" name="id_plat">
        <label>QUANTITE :</label><input type="number" name="quantite">
        <button type="submit" name="valider" >Valider</button>
    </form><br><br>

    <?php if (isset ($_GET['id_plat']))
    {
        $plat=$_GET['id_plat'];
        $isany=$_GET['quantite'];
        $insert='INSERT INTO details_commande(ID_PLATS,ID_COMMANDE,QUANTITE) VALUES( :un,1, :deux)';
        $insertion=$base->prepare($insert);
        $insertion->execute(array(
            'un'=> $plat,
            'deux'=> $isany,
        ));
    }
    ?>

      <?php 
        $reponse = $base->query('SELECT * FROM details_commande JOIN plats ON details_commande.ID_PLATS = plats.ID_PLATS');
        ?>
        <table border=1>
            <tr>
                <th colspan=4>Commande</th>
            </tr>
            <tr>
                <th>Numéro plats</th>
                <th>Noms</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                
            </tr>
        <?php 
        while ($donnees = $reponse->fetch())
        {
        ?>
            <tr>
            <td> <?php echo $donnees ['ID_PLATS']; ?></td>
            <td> <?php echo $donnees ['NOMS']; ?></td>
            <td> <?php echo $donnees ['PRIX_UNITAIRE']; ?></td>
            <td> <?php echo $donnees ['QUANTITE']; ?></td>
            </tr>
        <?php
        }
        $sql = $base->query("SELECT SUM(plats.PRIX_UNITAIRE*details_commande.QUANTITE) as total FROM details_commande JOIN plats ON details_commande.ID_PLATS = plats.ID_PLATS");
        $donnees = $sql->fetch()
        ?>

            <tr>
                <th>Totale</th>
                <td colspan="4"> <?php echo $donnees ['total']; ?></td>
            </tr>
        </table>
</body>
</html>
