<?php

    require('../FPDF/fpdf.php');
    
    // header("Content-disposition: attachment; filename=document.pdf");
    // header("Content-type: application/pdf");
    // readfile("document.pdf");
    
    
  
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
    
    

    // $db = new PDO("mysql:host=localhost;dbname=u938195940_dlearning","u938195940_un_dlearning","Dlearning2022");
      $db = new PDO("mysql:host=localhost;dbname=distance_learning","root","");

  
 

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        $program = $_POST['program'];       
        
        // GFG logo image
        $this->Image('../images/dl-logo.png', 70, 8, 20);
          
        // GFG logo image
        $this->Image('../images/wmsu.png', 200, 8, 20);
          
           
        // Set font-family and font-size
        $this->SetFont('Arial','B', 11);

        // Move to the right
        $this->Cell(120);
          
          
        // Move to the right
        $this->Cell(30, 5, 'DISTANCE LEARNING EDUCATION', 0, 0, 'C');
          
       
        // Break line with given space
        $this->Ln(4 );

        
        // Move to the right
        $this->Cell(120);
          
            
        // Set font-family and font-size
        $this->SetFont('Arial','', 10);
          
        // Move to the right
        $this->Cell(30,10, 'Western Mindanao State University', 0, 0, 'C');

        // Break line with given space
        $this->Ln(6);
         
        // Move to the right
        $this->Cell(120);


        // Set font-family and font-size
        $this->SetFont('Arial','I', 8);
          
        // Move to the right
        $this->Cell(30,10, 'Normal Road, Baliwasan 7000 Zamboanga City Philippines', 0, 0, 'C');

        // Break line with given space
        $this->Ln(20);
         
        // Move to the right
        // $this->Cell(5);

        
        // // Set font-family and font-size
        // $this->SetFont('Arial','', 10);
          

        //  // Move to the right
        // $this->Cell(30, 10, 'These are the following list for' .$program, 0, 0, 'C');
        // $this->Ln(10);

    }
       
    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
          
        // Set font-family and font-size of footer.
        $this->SetFont('Arial', '', 8);
          
        // set page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() .
              '/{nb}', 0, 0, 'C');
    }

    function headerTable(){
        $this->setFont('Arial', 'B', 8);
        $this->Cell(30, 8, 'ID', 1, 0, 'C');
        $this->Cell(60, 8, 'STUDENT NAME', 1, 0, 'C');
        $this->Cell(55, 8, 'EMAIL', 1, 0, 'C');
        $this->Cell(30, 8, 'CONTACT #', 1, 0, 'C');
        $this->Cell(25, 8, 'COLLEGE', 1, 0, 'C');
        $this->Cell(55, 8, 'MAJOR', 1, 0, 'C');
        $this->Cell(23, 8, 'STATUS', 1, 0, 'C');
        $this->Ln();

    }

    function viewTable($db){
        
        // $db = new PDO("mysql:host=localhost;dbname=u938195940_dlearning","u938195940_un_dlearning","Dlearning2022");

              $db = new PDO("mysql:host=localhost;dbname=distance_learning","root","");

        $program = $_POST['program'];

        if($program == "All"){
             $sql = "select * from user_details INNER JOIN application ON user_details.user_id = application.user_id where status = 'approved' OR status = 'admission'";
            $stmt = $db->query($sql);
        } else {
            $sql = "select * from user_details INNER JOIN application ON user_details.user_id = application.user_id  WHERE user_details.program = '$program' AND  status = 'admission';";
             $stmt = $db->query($sql);
        }


        $this->setFont('Arial', '', 8);
       
        $stmt = $db->query($sql);
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(30, 9, $data->user_id, 1, 0, 'C');
            $this->Cell(60, 9, $data->first_name.' '. $data->last_name, 1, 0, 'C');
            $this->Cell(55, 9, $data->email, 1, 0, 'C');
            $this->Cell(30, 9, $data->mobile, 1, 0, 'C');
            $this->Cell(25, 9, $data->program, 1, 0, 'C');
            $this->Cell(55, 9, $data->major, 1, 0, 'C');
            $this->Cell(23, 9, $data->status, 1, 0, 'C');
            $this->Ln();
        }
    }
}


// Create new object.
$pdf = new PDF();
$pdf->AliasNbPages();
  
// Add new pages
$pdf->AddPage('L', 'A4', 0);

$pdf->headerTable();
$pdf->viewTable($db);
  
$pdf->Output();
  
  
?>