<?php 
class personnage 
{
private $_nom;
private $_prenom;
private $_age;
private $_sexe;

public function setNom($_nom){
    $this->_nom=$_nom;
}
public function setPrenom($_prenom){
    $this->_prenom=$_prenom;
}
public function setAge($_age){
    $this->_age=$_age;
}
public function setSexe($_sexe){
    $this->_sexe=$_sexe;
}
public function presentation() {
    
    return "Nom : ".$this->_nom." <br>Prénom : ".$this->_prenom." <br>Âge : ".$this->_age."Sexe : ".$this->_sexe." .";
}

}
$personne=new personnage();
$personne->setNom("dsn");
$personne->setPrenom("sara");

echo $personne->presentation();
?>