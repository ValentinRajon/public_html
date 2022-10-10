<?php 
require_once('testutilisateur.php')
class utilisateur{
private $login;
private $nom;
private $prenom;

public function getMarque(){
    return $this->marque;
}

public function setMarque($marque2){
    $this->marque=$marque2;
}

public function _construct($m,$c,$i){
    $this->marque=$m;
    $this->couleur=$c;
    $this->immatriculation=$i;
}

public function getCouleur(){
    return $this->couleur;
}

public function setCouleur($couleur2){
    $this->couleur=$couleur2;
}

public function getImmat(){
    return $this->immatriculation;
}


public function setImmat($immatriculation2){
    $this->immatriculation=$immatriculation2;
}

public function setImmat($immatriculation2)
{
   if ($immatriculation2 =<8) {$this->immatriculation = $immatriculation2;}
}



public function afficher(){
    echo $this->getMarque();
    echo "<br>";
    echo $this->getCouleur();
    echo "<br>";
    echo $this->getImmat();
 
}
}
?>