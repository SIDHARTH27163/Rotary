<?php 
require_once 'fpdf/fpdf.php';
require_once 'dbConfig/dbconfig.php';
 
 class PDF extends FPDF{

 	function Header(){
 		$this->SetFont('Times','B',17);
 		$this->cell(60);
 		$this->Image('../img/logo.png',10,10,60);
 		$this->Cell(200,15,'Rotary Club of Dharamshala Board of Directors List',0,1,'C');
 		$this->Ln(15);
 		$this->SetFont('Times','B',11);
 		$this->SetFillColor(180,180,255);
 		$this->SetDrawColor(50,50,100);
 		$this->cell('12','8','SrNo.','1','0','C',true);
 		 $this->cell('20','8','BOD Session','1','0','C',true);
 		 $this->cell('50','8','Name','1','0','C',true);
     $this->cell('50','8','Designation','1','0','C',true);
        $this->cell('30','8','Contact','1','1','C',true);
    
   
    
 	}
 	function Footer(){
 		$this->SetY(-20);
 		$this->SetFont('Arial','B',10);
 		$this->Cell(0,10,'Page'.$this->PageNo()."/{pages}",0,0,'C');
 	}
 }

  $sql = "select * from boardofdirec Order by bod_session Desc";
             $query_run = mysqli_query($connection,$sql);
   $Srno=1;
    if(isset($_POST['gen_pdf']))
    {
        working
     $pdf = new PDF('P','mm','a4');   
     $pdf->Addpage();
     $pdf->AliasNbPages('{pages}');

     
    
   
 
     while($row = mysqli_fetch_assoc($query_run))
     {
      $pdf->SetFont('arial','','10');
      	$pdf->cell('12','8',$Srno++,'1','0','');
 		 $pdf->cell('20','8',$row['bod_session'],'1','0','');
     $pdf->cell('50','8',$row['name'],'1','0','');
 
     $pdf->cell('58','8',$row['designation'],'1','0','');
     $pdf->cell('30','8',$row['contact'],'1','1','');
    
     


     }
     $pdf->Output();
      		}
      
    
 ?>