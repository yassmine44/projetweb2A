<?php
   
    require("fpdf/fpdf.php");
    $db=new PDO('mysql:host=localhost;dbname=projet', 'root', '');
    
   
    class myPDF extends FPDF
    {
   
    function header()
    {
            $this->SetFont("Arial","B",14);
            $this->Image('w.png',40,6);
            $this->Cell(267,5,"                                                                                            Commandes",0,0,'c');
            $this->Ln(20);
            $this->Cell(5,5,"                                                                                     liste des Commandes:",'C');
            $this->ln();
    }
    
    function footer()
    {
        $this->SetY(-15);
        $this->SetFont("Arial","B",10);
        $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont("Times","B",12);
        $this->Cell(30,10,'nom',1,0,'C');
        $this->Cell(40,10,'telephone',1,0,'C');
        $this->Cell(50,10,'adresse',1,0,'C');
        $this->Cell(30,10,'prix',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont("Times","B",12);
        $stmt=$db->query('select * from commande ');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(30,10,$data->nom,1,0,'L');
        $this->Cell(40,10,$data->telephone,1,0,'L');
        $this->Cell(50,10,$data->adresse,1,0,'L');
        $this->Cell(30,10,$data->prix,1,0,'L');
        $this->Ln();
        }
    }
    }
    
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headerTable();
    $pdf->viewTable($db);
    $pdf->output("commande.pdf","D");


?>