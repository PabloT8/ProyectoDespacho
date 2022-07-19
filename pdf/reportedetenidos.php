<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/logo.png',200,4,200);
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(95);
    // Título
    $this->Cell(350,70,'Reporte de Detenidos',0,0,'C');
    // Salto de línea
    $this->Ln(45);

    $this->Cell(20,10,'#',1,0,'C',0);
    $this->Cell(50,10,utf8_decode('Usuario'),1,0,'C',0);
    $this->Cell(30,10,utf8_decode('Grupo'),1,0,'C',0);
    $this->Cell(30,10,utf8_decode('Turno'),1,0,'C',0);
    $this->Cell(30,10,utf8_decode('Fecha'),1,0,'C',0);
    $this->Cell(20,10,utf8_decode('Hora'),1,0,'C',0);
    $this->Cell(70,10,utf8_decode('Ticket'),1,0,'C',0);
    $this->Cell(90,10,utf8_decode('Tipologia'),1,0,'C',0);
    $this->Cell(50,10,utf8_decode('Departamento'),1,0,'C',0);
    $this->Cell(50,10,utf8_decode('Municipio'),1,0,'C',0);
    $this->Cell(30,10,utf8_decode('Cantidad'),1,0,'C',0);
    $this->Cell(110,10,utf8_decode('Observacion'),1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','',10);
    // Número de página
    $this->Cell(0,10,'Sistema Nacional de Emergencias 911',0,0,'C');
    $this->Cell(0,10,$this->PageNo().'/{nb}',0,0,'C');
}

}

include("../controllers/conexion.php");
$conexion=conexion();

$sql="SELECT * FROM detenidos order by detenidosid desc";
$resultado=$conexion->query($sql);

// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm',array(600,600));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$cont=0;
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(20,10,++$cont,1,0,'C',0);
    $pdf->Cell(50,10,utf8_decode($row['detenidosusuario']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($row['detenidosgrupo']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($row['detenidosturno']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($row['detenidosfecha']),1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['detenidoshora']),1,0,'C',0);
    $pdf->Cell(70,10,utf8_decode($row['detenidosticket']),1,0,'C',0);
    $pdf->Cell(90,10,utf8_decode($row['detenidostipologia']),1,0,'C',0);
    $pdf->Cell(50,10,utf8_decode($row['detenidosdepartamento']),1,0,'C',0);
    $pdf->Cell(50,10,utf8_decode($row['detenidosmunicipio']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($row['detenidoscantidad']),1,0,'C',0);
    $pdf->Cell(110,10,utf8_decode($row['detenidosobservaciones']),1,1,'C',0);
}

$pdf->Output();


?>  