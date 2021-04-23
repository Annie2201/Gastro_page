<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gastronomie Pizza</title>
    <link rel="stylesheet" href="perso.css">
</head
<?php
include 'un.html';
$base=new PDO('mysql:HOST=localhost;dbname=restaurant','root','root');
$reponse = $base->query('SELECT * FROM personnel as p JOIN type_personnel as tp ON p.ID_TYPE=tp.ID_TYPE');
?>
<div class='all'>
    <div class="container" id="left">
        <?php
        $reponse = $base->query('SELECT * FROM personnel where ID_PERSONNEL LIKE 1');
        while ($donnees = $reponse->fetch())
        { 
        ?>
	        <p>
                <a href="#"> 
                <?php
                echo '<br><br><br>'. '~'. $donnees ['ID_PERSONNEL'] . '~';?> <br>
                <?php  echo $donnees ['NOM'];?><br>
                <?php  echo $donnees ['PRENOM'];?> <br>
                <?php  echo $donnees ['SALAIRE'] . 'Ariary'; ?><br>
                </a>
            </p>
        <?php
            }
        ?>
    </div>

    <div class="container" id="left_left">
        <?php
        $reponse = $base->query('SELECT * FROM personnel where ID_PERSONNEL LIKE 4');
        while ($donnees = $reponse->fetch())
        { 
        ?>
	        <p>
                <a href="#"> 
                <?php
                echo '<br><br><br>'. '~'. $donnees ['ID_PERSONNEL'] . '~';?> <br>
                <?php  echo $donnees ['NOM'];?><br>
                <?php  echo $donnees ['PRENOM'];?> <br>
                <?php  echo $donnees ['SALAIRE'] . 'Ariary'; ?><br>
                </a>
            </p>
        <?php
            }
        ?>
    </div>

    <div class="container" id="right">
        <?php
        $reponse = $base->query('SELECT * FROM personnel where ID_TYPE LIKE 2');
        while ($donnees = $reponse->fetch())
        { 
        ?>
	        <p>
                <a href="#">
                <?php
                echo  '<br><br><br>'.'~'. $donnees ['ID_PERSONNEL'] . '~';?> <br>
                <?php  echo $donnees ['NOM'];?><br>
                <?php  echo $donnees ['PRENOM'];?> <br>
                <?php  echo $donnees ['SALAIRE'] . 'Ariary'; ?><br>
                </a>
            </p>
        <?php
    	}
        ?>
    </div>

    <div class="container" id="right_right">
        <?php
        $reponse = $base->query('SELECT * FROM personnel where ID_TYPE LIKE 3');
        while ($donnees = $reponse->fetch())
        { 
        ?>	
            <p>
                <a href="#"> 
                <?php
                echo'<br><br><br>'. '~'. $donnees ['ID_PERSONNEL'] . '~';?> <br>
                <?php  echo $donnees ['NOM'];?><br>
                <?php  echo $donnees ['PRENOM'];?> <br>
                <?php  echo $donnees ['SALAIRE'] . 'Ariary'; ?><br>
                </a>
            </p>
        <?php
            }
        ?>
    </div>
</div>
</body>
</html>
