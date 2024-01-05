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

public function prime($_anciennete){
    $coeff=$_anciennete*2;
    return $coeff;
}

   public function profil(){
    $aujourdhui=new DateTime("2024-05-01");
    $payday=new DateTime("2000-05-01");
    $_datembauche=new DateTime($this->_embauche);
    $anciennete=$this->anciennete($_datembauche);
    $prime=$this->_salaire/100*(105+$this->prime($anciennete));
      
     echo "<br>Nom : ".$this->_nom."<br>Prénom : ".$this->_prenom."<br>Date d'embauche : ".$_datembauche->format('d/m/Y')." depuis ".$anciennete."<br>Poste : ".$this->_poste."<br>Salaire : ".$this->_salaire."<br>Lieu : ".$this->_lieu."<br><br>";
    
if($aujourdhui->format("m-d")==$payday->format('m-d')){
        echo "<br> L'ordre de transfert de ".$prime." a été envoyé à la banque de ".$this->_prenom."<br><br>";
    }

}}



 
    $employe= new employe();
$employe->setNom("dsn");
$employe-> setPrenom("Sara");
$employe->setEmbauche('2000-01-01');
$employe->setPoste("Présidente");
$employe->setSalaire('50000');
$employe->setLieu("Marseille");
$moe= new employe();
$moe->setNom("sizlak");
$moe-> setPrenom("moe");
$moe->setEmbauche('1971-10-03');
$moe->setPoste("barman");
$moe->setSalaire('2200');
$moe->setLieu("springfiled");
$stan= new employe();
$stan->setNom("smith");
$stan-> setPrenom("stan");
$stan->setEmbauche('1972-12-12');
$stan->setPoste("vigile");
$stan->setSalaire('2500');
$stan->setLieu("paris");
$roger= new employe();
$roger->setNom("smith");
$roger-> setPrenom("roger");
$roger->setEmbauche('1923-08-25');
$roger->setPoste("vendeur");
$roger->setSalaire('1800');
$roger->setLieu("nantes");
echo $employe->profil();
echo $stan->profil();
echo $moe->profil();
echo $roger->profil();
?>