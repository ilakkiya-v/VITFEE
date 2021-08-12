<?php 
session_start();
include('config/config.php');
include('sample.php');
//call the FPDF library
require('fpdf17/fpdf.php');
$sql1 = "SELECT * FROM stud_prof WHERE regno = '" . $_SESSION['regno'] . "'";
$result1 = mysqli_query($db,$sql1);
while($row1 = mysqli_fetch_array($result1)){
$email = $row1['email'];

}


class PDF extends FPDF 
{ 
	// Page header 
	function Header() 
	{ 
		// GFG logo image 
		$this->Image('assets/img/logo/logo.png', 75, 8, 50); 
		
		
		// Set font-family and font-size 
		$this->SetFont('Arial','B',20); 
		$this->Cell(9 ,10,'',22,1);//end of line
		// Move to the right 
		$this->Cell(80); 
		
	
		// Set the title of pages. 
		$this->Cell(30, 20, 'RECEIPT FOR REGISTERED EVENT', 0, 2, 'C'); 
		
		// Break line with given space 
		$this->Ln(5); 
	} 
	
	// Page footer 
	function Footer() 
	{ 
		// Position at 1.5 cm from bottom 
		$this->SetY(-15); 
		
		// Set font-family and font-size of footer. 
		$this->SetFont('Arial', 'I', 8); 
		
		// set page number 
		$this->Cell(0, 10, 'Page ' . $this->PageNo() . 
			'/{nb}', 0, 0, 'C'); 
	} 
} 

// Create new object. 
$pdf = new PDF(); 
$pdf->AliasNbPages(); 

// Add new pages 
$pdf->AddPage(); 

// Set font-family and font-size. 
$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10); 

$pdf->Cell(10 ,6,'Sl',1,0,'C');
$pdf->Cell(50 ,6,'Event name',1,0,'C');
$pdf->Cell(50 ,6,'register number',1,0,'C');
$pdf->Cell(50,6,'Name',1,0,'C');
$pdf->Cell(30 ,6,'Unit Price',1,1,'C');
$pdf->SetFont('Arial','',10); 
// Loop to display line number content 
if(isset($_POST['submit'])){
for ($x = 0; $x < $quantity; $x++) {
	$pdf->Cell(10 ,6,$x,1,0);
	$pdf->Cell(50 ,6,$namee,1,0);
	${'regno' . $x} = $_POST["regno".$x];
	$pdf->Cell(50 ,6, ${'regno' . $x},1,0);//end of line
	 ${'name' . $x} = $_POST["name".$x];
	$pdf->Cell(50 ,6, ${'name' . $x},1,0);//end of line
	$pdf->Cell(30 ,6, $unit.'.00',1,1);//end of line

mysqli_query($db,"INSERT INTO eventorder(regno, name, event, amt) VALUES ('".${'regno' . $x}."','".${'name' . $x}."','$namee',$unit)");	
	
}
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(110 ,6,'',0,0);
$pdf->Cell(25 ,6,'Grandtotal',0,0);
$pdf->Cell(55 ,6,$total.'.00',1,1,'R');

}
else
{
	$sql = "SELECT * FROM eventorder";
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){
$reg = $row['regno'];
$names = $row['name'];
$event = $row['event'];
$amount = $row['amt'];

}
for ($x = 0; $x < $quantity; $x++) {
	$pdf->Cell(10 ,6,$x,1,0);
	$pdf->Cell(50 ,6,$namee,1,0);
	$pdf->Cell(50 ,6, $reg,1,0);//end of line
	$pdf->Cell(50 ,6, $names,1,0);//end of line
	$pdf->Cell(30 ,6, $amount.'.00',1,1);//end of line	
}
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(110 ,6,'',0,0);
$pdf->Cell(25 ,6,'Grandtotal',0,0);
$pdf->Cell(55 ,6,$total.'.00',1,1,'R');

}
// email stuff (change data below)
$to = $email;
$from = "luckymaji2001@gmail.com"; 
$subject = "send email with pdf attachment"; 
$message = "<p>Please see the attachment.</p>";
// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "receiptevent.pdf";

// encode data (puts attachment in proper format)
$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));

// main header
$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

// no more headers after this, we start the body! //

$body = "--".$separator.$eol;
$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$body .= "This is the Receipt for your Registered Event".$eol;

// message
$body .= "--".$separator.$eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$body .= $message.$eol;

// attachment
$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";

// send message
mail($to, $subject, $body, $headers);
header('location: receiptevent.php'); 
?>
