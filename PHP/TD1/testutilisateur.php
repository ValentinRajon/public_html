<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>

    <body>
        <?php require_once('utilisateur.php'); 
        
          $utilisateur1 = new utilisateur();
          $utilisateur1->login = 'azerty';
          $utilisateur1->nom = 'rajon';
          $utilisateur1->prenom = 'valentin';
          $utilisateur2 = new utilisateur();
          $utilisateur2->login = 'azerty1234';
          $utilisateur2->nom = 'keller';
          $utilisateur2->prenom = 'emerick';
          $utilisateur = array($utilisateur1, $utilisateur2);

        echo utilisateur::afficher();
                ?>
        
    </body>
</html>