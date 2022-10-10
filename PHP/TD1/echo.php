<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>

    <body>
        Voici le résultat du script PHP : 
<table>
        <thead>
            <tr>
                <th colspan="3">Liste Voitures :</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Marque</td>
                <td>Couleur</td>
                <td>Immatriculation</td>
            </tr>
        <tr>
        <?php 
        $tab= array('Marque' => 'BMW', 'Couleur' => 'Noir', 'Immat' => '15ERF45');
        $tab2= array('Marque' => 'Tesla', 'Couleur' => 'Jaune', 'Immat' => '14TRF60');
        $tab3= array('Marque' => 'Peugeot', 'Couleur' => 'rouge', 'Immat' => '14TGT60');
        $voiture=[$tab,$tab2,$tab3];

            foreach ($voiture as $cle => $valeur){ ?>
            <tr>
          <?php  foreach ($valeur as $cle => $valeur2){ ?>
            <td> <?php echo $valeur2;?> </td>
          <?php }?>
          </tr>
          <?php }?>
        </tr>
        </tbody>
</table>
    </body>
</html>