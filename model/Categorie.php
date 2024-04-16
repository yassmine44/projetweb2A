<?PHP
	class Categorie{
		private  $IDcat  = null;
		private  $Typecat = null;
		
		function __construct(int $IDcat, string $Typecat){
			
			$this->IDcat=$IDcat;
			$this->Typecat=$Typecat;

		}
		
		function getIDcat(): int{
			return $this->IDcat;
		}
		function getTypecat(): string{
			return $this->Typecat;
		}

		function setIDcat(int $IDcat): void{
			$this->IDcat=$IDcat;
		}
		function setTypecat(string $Typecat): void{
			$this->Typecat=$Typecat;
		}

	}
?>