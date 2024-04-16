<?PHP
	class commande{
		private  $idCom = null;
		private  $nom = null;
		private  $telephone= null;
		private  $adresse= null;
		private  $prix = null;
		
		function __construct( $nom,  $telephone,  $adresse, $prix){
	
			$this->nom=$nom;
			$this->telephone=$telephone;
			$this->adresse=$adresse;
			$this->prix=$prix;
		}
		
		function getidCom() {
			return $this->idCom;
		}
		function getNom() {
			return $this->nom;
		}
		
		function gettelephone(){
			return $this->telephone;
		}
		function getadresse() {
			return $this->adresse;
		}
		function getPrix() {
			return $this->prix;
		}

		function setNom( $nom) {
			$this->nom=$nom;
		}
		function settelephone( $telephone) {
			$this->telephone;
		}
		function setadresse( $adresse) {
			$this->adresse;
		}
		
		function setPrix( $prix) {
			$this->prix=$prix;
		}
	}
?>