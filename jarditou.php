<?php 
class employe
{
    private $_nom ;
    private $_prenom;
    private $_embauche;
    private $_poste;
    private $_salaire;
    private $_lieu;
  

    public function setNom($_nom){
        $this->_nom=$_nom;
    }
    public function setPrenom($_prenom){
        $this->_prenom=$_prenom;
    }
    public function setEmbauche($_embauche){
        $this->_embauche=$_embauche;
    }
    public function setPoste($_poste){
        $this->_poste=$_poste;
    }
    public function setSalaire($_salaire){
        $this->_salaire=$_salaire;
    }
    public function setLieu($_lieu){
        $this->_lieu=$_lieu;
    }
        public function anciennete(){
            $datembauche=new DateTime($this->_embauche);
            $aujourdhui=new DateTime('now');
            $duree=$aujourdhui->diff($datembauche);
            return $duree->d;
}
   
  
}
$employe= new employe();
$employe->setNom("dsn");
$employe-> setPrenom("sara");
$employe->setEmbauche("2023");

 public function profil(){
        echo "Nom : ".$this->_nom."<br>Prénom : ".$this->_prenom."<br>Date d'embauche : ".$this->_embauche." depuis ".$employe->anciennete()."<br>Poste : "."<br>Salaire : ".$this->_salaire."<br>Lieu : ".$this->_lieu;
    }
echo $employe->profil();
?>