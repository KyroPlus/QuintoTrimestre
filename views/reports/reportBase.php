<?php
ob_clean(); // Limpia cualquier salida previa


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,utf8_decode('REPORTE DE RESERVAS DEL USUARIO'), 0, 1, 'C');
$pdf->Ln(10);

// Encabezado de tabla
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10,'ID',1,0,'C');
$pdf->Cell(40,10,'Check-in',1,0,'C');
$pdf->Cell(40,10,'Check-out',1,0,'C');
$pdf->Cell(90,10,utf8_decode('Solicitud Especial'),1,1,'C');

$pdf->SetFont('Arial','',12);

// Verifica que existan reservas
if (!empty($reservas) && is_array($reservas)) {
    foreach ($reservas as $res) {
        $pdf->Cell(20,10,$res['id'],1,0,'C');
        $pdf->Cell(40,10,$res['checkin'],1,0,'C');
        $pdf->Cell(40,10,$res['checkout'],1,0,'C');
        $pdf->Cell(90,10,utf8_decode($res['special_request']),1,1,'L');
    }
} 

$pdf->Output();
?>
