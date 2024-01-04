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
        public function anciennete($_embauche){
            
            $aujourdhui=new DateTime('now');
            $duree=$aujourdhui->diff($_embauche);
            return $duree->y;
}
   public function profil(){
    $_datembauche=new DateTime($this->_embauche);
    $anciennete=$this->anciennete($_datembauche);
        echo "Nom : ".$this->_nom."<br>Prénom : ".$this->_prenom."<br>Date d'embauche : ".$_datembauche->format('Y')." depuis ".$anciennete."<br>Poste : ".$this->_poste."<br>Salaire : ".$this->_salaire."<br>Lieu : ".$this->_lieu;
    }
  
}


 
    $employe= new employe();
$employe->setNom("dsn");
$employe-> setPrenom("Sara");
$employe->setEmbauche('2000-01-01');
$employe->setPoste("Présidente");
$employe->setSalaire('50000');
$employe->setLieu("Marseille");
echo $employe->profil();
?>