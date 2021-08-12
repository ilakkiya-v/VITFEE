<?php 
session_start();
include('config/config.php');
//call the FPDF library
require('fpdf17/fpdf.php');
$sql = "SELECT * FROM payfee WHERE regno = '" . $_SESSION['regno'] . "'";
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){
$regno = $row['regno'];
$payment = $row['paymentMethod'];
$fee = $row['fee_or_event'];
$amt = $row['amount'];
$time = $row['time'];
}

class Invoice extends FPDF{

    function Header(){
        $this->SetFont('Arial','B',24);
        $this->Cell(60);
        $this->Cell(95,10,'VIT CHENNAI');
        $this->Ln(10);
       
        $this->Ln(10);
        $this->SetFont('Arial','B',14);
        $this->Cell(70);
        $this->Cell(60,10,'FEE RECEIPT',1,1,'C',true);
        $this->Image('assets/img/logo/logo.png',79,55,50);
        $this->Ln(10);
    }

    function add_from($str){
        $this->SetFont('Arial','',10);
        $this->setXY(10,50);
        $this->Cell(70,7,'Student Details',1,2,'L',true);
        $this->MultiCell(70,8,$str,'LRB',1);
    }

    function add_to($str){
        $x = $this->GetX();
        $this->setXY($x+120,50);
        $this->Cell(60,7,'VIT bank details',1,2,'L',true);
        $y = $this->GetY();
        $this->MultiCell(60,8,$str,'LRB',1);
        $this->Ln(10);
    }

    function add_order_detail($rdate,$cur){
        $this->Cell(50);
        $x=$this->GetX();
        $y=$this->GetY();
        $this->setXY($x,$y);
        $this->Cell(50,7,'Payment  date',1,2,'L',true);
        $this->Cell(50,8,$rdate,'LRB',1);
        $this->setXY($x+50,$y);
        $this->Cell(40,7,'Currency',1,2,'L',true);
        $this->Cell(40,8,$cur,'LRB',1);
        $this->Ln(10);
    }



    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Copyright 2020 Vellore Institute of Chennai. All Rights Reserved.',0,0,'C');
    }
}

$pdf = new Invoice();
$pdf->SetFillColor(214,214,214);
$pdf->AddPage();
$pdf->add_from("Registration Number: $regno\n Payment Method: $payment\n Fee: $fee\n Paid Amount: $amt\n");
$pdf->add_to("Name :Vellore Institute of Technology University\nBank Name : Indian Bank\nA/C No:6023631266\nIFSC :IDIB000V098\n Branch : Vit Chennai Campus Branch");
$pdf->add_order_detail($time,'INR');

$pdf->Output();
?>