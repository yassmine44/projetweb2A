<?PHP
	class Affectation_event_to_client{
		private  $IDAffectation = null;
		private  $offreFK = null;
		private  $ClientFK = null;
		
		function __construct($offreFK, $ClientFK){
			
			$this->offreFK=$offreFK;
			$this->ClientFK=$ClientFK;
		}
		
		function getIDAffectation(){
			return $this->IDAffectation;
		}
		function getoffreFK(){
			return $this->offreFK;
		}
		function getClientFK(){
			return $this->ClientFK;
		}

		function setIDAffectation( $IDAffectation){
			$this->IDAffectation=$IDAffectation;
		}
		function setoffreFK($offreFK){
			$this->offreFK;
		}
		function setClientFK($ClientFK){
			$this->ClientFK;
		}
	}
?>