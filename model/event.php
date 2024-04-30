<?PHP
	class Event{
		private  $IDoffre  = null;
		private  $titreoffre = null;
		private  $datelimit = null;
		private  $typecontrat = null;
		private  $salaire = null;
		private  $image;
		private  $idfk = null;
			
		function __construct( $titreoffre,  $datelimit,  $typecontrat,  $salaire, $image, $idfk){
			
			$this->titreoffre=$titreoffre;
			$this->datelimit=$datelimit;
			$this->typecontrat=$typecontrat;
			$this->salaire=$salaire;
			$this->image=$image;
			$this->idfk=$idfk;
		}
		
		function getIDoffre(){
			return $this->IDoffre;
		}
		function gettitreoffre(){
			return $this->titreoffre;
		}
		function getdatelimit(){
			return $this->datelimit;
		}
		function gettypecontrat(){
			return $this->typecontrat;
		}
		function getsalaire(){
			return $this->salaire;
		}
		function getidfk(){
			return $this->idfk;
		}
		function getimage(){
			return $this->image;
		}
		
		function setIDoffre($IDoffre){
			$this->IDoffre=$IDoffre;
		}
		function settitreoffre($titreoffre){
			$this->titreoffre=$titreoffre;
		}
		function setdatelimit($datelimit){
			$this->datelimit=$datelimit ;
		}
		function settypecontrat($typecontrat){
			$this->typecontrat=$typecontrat;
		}
		function setsalaire($salaire){
			$this->salaire=$salaire;
		}
		function setidfk($idfk){
			$this->idfk=$idfk;
		}
		function setimage($image){
			$this->image=$image;
		}
		
	}
?>