<?PHP
	class Affectation_event_to_client{
		private  $IDAffectation = null;
		private  $EvenementFK = null;
		private  $ClientFK = null;
		
		function __construct($EvenementFK, $ClientFK){
			
			$this->EvenementFK=$EvenementFK;
			$this->ClientFK=$ClientFK;
		}
		
		function getIDAffectation(){
			return $this->IDAffectation;
		}
		function getEvenementFK(){
			return $this->EvenementFK;
		}
		function getClientFK(){
			return $this->ClientFK;
		}

		function setIDAffectation( $IDAffectation){
			$this->IDAffectation=$IDAffectation;
		}
		function setEvenementFK($EvenementFK){
			$this->EvenementFK;
		}
		function setClientFK($ClientFK){
			$this->ClientFK;
		}
	}
?>