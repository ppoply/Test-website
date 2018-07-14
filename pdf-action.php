<?php 
/* File for converting the user input data into pdf */

// collection of Textbox input data
if(isset($_POST['but'])){
	$text = $_POST["text_area"];
	
}


require('fpdf ref/fpdf.php');  

//Setting up Headers and Footers
class PDF extends FPDF
{

function Header()
{
    
    $this->Image('http://cdn.differencebetween.net/wp-content/uploads/2018/02/Difference-Between-Cool-and-Cold-1.gif',10,6,30);
    
    $this->SetFont('Arial','BU',15);
    
    $this->Cell(80);
    
    $this->Cell(30,10,'Simple PDF generator',0,0,'C');
    
    $this->Ln(30);
}


function Footer()
{
    
    $this->SetY(-15);
    
    $this->SetFont('Arial','I',8);
    
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}

//Setting up the output PDF 
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(190,10,$text);
$pdf->Ln();
$pdf->SetFont('Times','BI',10);
$pdf->Cell(35,10,'Made by Parth Poply.',1,1);
$pdf->Output();
?>
 