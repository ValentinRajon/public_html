<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>

    <body>
        <?php require_once('voiture.php'); 
        
          $voiture1 = new Voiture();
          $voiture1->marque = 'Tesla';
          $voiture1->immat = '12RFG45';
          $voiture1->couleur = 'jaune';
          $voiture2 = new Voiture();
          $voiture2->marque = 'porche';
          $voiture2->immat = '56FGH25';
          $voiture2->couleur = 'Rouge';
          $voiture = array($voiture1, $voiture2);

        echo Voiture::afficher();
                ?>
        
    </body>
</html>