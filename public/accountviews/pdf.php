<?php
require('../../fpdf.php');

require "../../private/autoload.php";
$price = $_SESSION['price'];
$customer_id = $_SESSION['customer_id'];
$shipment = $_SESSION['shipment'];

$user_data = check_login($con);

$full_name = "";
$telephone = "";
$email = "";

if(isset($user_data['full_name'])){
    $full_name = $user_data['full_name'];
    $telephone = $user_data['telephone'];
    $email = $user_data['email'];




$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','U',20);
$pdf->Cell(40,10,'Worldwide Logistics');
$pdf->SetFont('Arial','',10);
$pdf->SetY(10);

$pdf->Cell(100,30,'Your unique customer ID is : ' . strval($customer_id) . '.');
$pdf->SetY(10);
$pdf->Cell(100,40,'The price for this shipment based on the given data by the customer is ' . strval($price) . ' CHF.');
$pdf->SetY(10);
$pdf->SetFont('Arial','U',10);
$pdf->Cell(100,60,'Pickup address and contact details: ');
$pdf->SetFont('Arial','',10);
$pdf->SetY(10);
$pdf->Cell(100,80, strval($full_name) . ', '. strval($telephone) . ', ' . strval($email));
$pdf->SetY(10);
$pdf->SetFont('Arial','U',10);
$pdf->Cell(100,90,'Destination address and contact details: ');
$pdf->SetFont('Arial','',10);
$pdf->SetY(10);
$pdf->Cell(100,110, strval($shipment[10]) . ', '. strval($shipment[11]) . ', ' . strval($shipment[12]));
$pdf->SetY(10);
$pdf->SetX(90);
$pdf->Cell(100,100, strval($shipment[7]) . ', '. strval($shipment[8]) . ', ' . strval($shipment[9]));
$pdf->SetY(10);
$pdf->SetX(90);
$pdf->Cell(100,70, strval($shipment[4]) . ', '. strval($shipment[5]) . ', ' . strval($shipment[6]));
$pdf->SetXY(10, 30);
$pdf->SetFont('Arial','U',10);
$pdf->Cell(100,90,'Package size: ');
$pdf->SetFont('Arial','',10);
$pdf->SetXY(10, 40);
$pdf->Cell(100,90,'Length: ' . strval($shipment[0]) . 'CM, Width: ' . strval($shipment[1]) . 'CM, Height: ' . strval($shipment[2]) . 'CM' );
$pdf->SetXY(10, 50);
$pdf->Cell(100,90,'Weight: ' . strval($shipment[3]) . 'KG' );

$pdf->Output();
}

