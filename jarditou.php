<?php 
class magasin
{
    private $_nom;
    private $_adresse;
    private $_cp;
    public $_lieu;
    public $_restauration;

    function __construct($_nom, $_adresse, $_cp, $_lieu,$_restauration){
        $this->_nom=$_nom ;
        $this->_adresse=$_adresse;
        $this->_cp=$_cp;
        $this->_lieu=$_lieu;
        $this->_restauration=$_restauration;

    }
    public function getLieu($_lieu){
        return $this->_lieu;
    }
}
class employe
{
    private $_nom ;
    private $_prenom;
    private $_embauche;
    private $_poste;
    private $_salaire;
    private $_lieu;
    private $_restauration;
 
  
    public function __construct($_nom, $_prenom,$_embauche,$_poste,$_salaire,$_lieu, $_restauration){
        $this->_nom=$_nom;       
        $this->_prenom=$_prenom;
        $this->_embauche=$_embauche;
        $this->_poste=$_poste;
        $this->_salaire=$_salaire;
        $this->_lieu=$_lieu;
        $this->_restauration=$_restauration;
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
        $aujourdhui=new DateTime('2024-05-08');
        $payday=new DateTime("2024-05-08");
        $_datembauche=new DateTime($this->_embauche);
        $anciennete=$this->anciennete($_datembauche);
        $prime=$this->_salaire/100*(105+$this->prime($anciennete));
        if($anciennete >= 1){
            echo $this->_nom." bénéficie de chèques vacances.";
        }else{
            echo $this->_nom." ne bénéficie pas de chèques vacances, travaille depuis moins de 1 ans .";

        }
        
        echo "<br>Nom : ".$this->_nom."<br>Prénom : ".$this->_prenom."<br>Date d'embauche : ".$_datembauche->format('d/m/Y')." depuis ".$anciennete."<br>Poste : ".$this->_poste."<br>Salaire : ".$this->_salaire."<br>Lieu : ".$this->_lieu."<br> restauration : ".$this->_restauration."<br><br>";
        
        if($aujourdhui->format("m-d")==$payday->format('m-d')){
            echo " L'ordre de transfert de ".$prime." a été envoyé à la banque de ".$this->_prenom."<br><br>";
        }
    }
    public function enfant($_age){
        $cheque=array(
            "20€"=>0,
            "30€"=>0,
            "50€"=>0
        );
        if($_age>=0 && $_age<=10){
            $cheque["20€"]++;
        }
        else if($_age>=11 && $_age<=15){
            $cheque["30€"]++;
        }
        else if($_age>=16 && $_age<=18) {
            $cheque["50€"]++;
        }
// if($cheque["30€"]){
//     echo "à le droit à ".$cheque["30€"];
// }
        $chequeNoel=array_sum($_age)>0;

        if($chequeNoel){
            echo "À le droit à ".$cheque["20€"]." chèques de 20€ de Noël.";
            echo "À le droit à ".$cheque["30€"]." chèques de 30€ de Noël.";
            echo "À le droit à ".$cheque["50€"]." chèques de 50€ de Noël.";

        };
    }
}

$magasin1 = new magasin("magasin 1","5 rue paradis","13008","Marseille","sur place");

$magasin2 = new magasin("magasin 2","25 rue dupont","59887","Springfield","ticket ");

$magasin3 = new magasin("magasin 3","16 rue de la paix","75002","Paris","ticket");

$magasin4 = new magasin("magasin 4","2 rue des serpentines","44200","Nantes","sur place");


$employe = new employe("dsn","Sara",'2000-01-01',"Présidente",50000,$magasin1->_lieu,$magasin1->_restauration);
$employe->enfant(2,8,15);
echo $employe->profil();

$moe= new employe("Sizlak","Moe",'2024-01-02',"barman",2200,$magasin2->_lieu,$magasin2->_restauration);
echo $moe->profil();

$stan= new employe("Smith","Stan",'1982-12-12',"vigile",2500,$magasin3->_lieu,$magasin3->_restauration);
echo $stan->profil();

$roger= new employe("Smith","Roger",'1802-05-13',"Vendeur",1500,$magasin4->_lieu,$magasin4->_restauration);
echo $roger->profil();
?>