<?php 
header("Content-type: text/html; charset=utf-8");
// Begin configuration
date_default_timezone_set('America/Sao_Paulo');
$textColour = array( 0, 0, 0 );
$headerColour = array( 100, 100, 100 );
$tableHeaderTopTextColour = array( 255, 255, 255 );
$tableHeaderTopFillColour = array( 125, 152, 179 );
$tableHeaderTopProductTextColour = array( 0, 0, 0 );
$tableHeaderTopProductFillColour = array( 143, 173, 204 );
$tableHeaderLeftTextColour = array( 99, 42, 57 );
$tableHeaderLeftFillColour = array( 184, 207, 229 );
$tableBorderColour = array( 50, 50, 50 );
$tableRowFillColour = array( 213, 170, 170 );
$reportName = "Quantidade de Vendas por Categoria Indicada";
$reportNameYPos = 170;
$logoFile = "../img/logos/logo.png";
$logoXPos = 45;
$logoYPos = 40;
$logoWidth = 110;
$columnLabels = array("Quantidade");
// $rowLabels = array( "SupaWidget", "WonderWidget", "MegaWidget", "HyperWidget" );
$chartXPos = 20;
$chartYPos = 250;
$chartWidth = 160;
$chartHeight = 80;
$chartXLabel = "Filtro Indicado";
$chartYLabel = "Quantidade Vendida";
$chartYStep = 20000;

$chartColours = array(
                  array( 255, 100, 100 ),
                  array( 100, 255, 100 ),
                  array( 100, 100, 255 ),
                  array( 255, 255, 100 ),
                );

$data = array(
          array( 9940, 10100, 9490, 11730 ),
          array( 19310, 21140, 20560, 22590 ),
          array( 25110, 26260, 25210, 28370 ),
          array( 27650, 24550, 30040, 31980 ),
        );

// End configuration

require('./fpdf/fpdf.php');

$pdf = new FPDF( 'P', 'mm', 'A4' );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->AddPage();
$pdf->Image( $logoFile, $logoXPos, $logoYPos, $logoWidth );
$pdf->SetFont( 'Arial', 'B', 24 );
$pdf->Ln( $reportNameYPos );
$pdf->Cell( 0, 15, $reportName, 0, 0, 'C' );
$pdf->AddPage();
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', '', 17 );
$pdf->Cell( 0, 15, $reportName, 0, 0, 'C' );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 20 );
$pdf->Write( 19, "Quantidade Total de Vendas" );
$pdf->Ln( 16 );
$pdf->SetFont( 'Arial', '', 12 );
$pdf->Write( 6, utf8_decode("Relatório gerado com intuito de demonstrar e otimizar as vendas da RainbowShell. Todos os dados apresentados foram retirados diretamente de nosso Banco de Dados, constando informações geradas no dia: ").date('d/m/Y H:i') );
$pdf->Ln( 12 );
$pdf->Write( 6, "Demais dados mostrados abaixo." );
$pdf->Ln( 12 );

// Create the table header row
$pdf->SetFont( 'Arial', 'B', 15 );

// Remaining header cells
$pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
$pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );

$pdf->Cell(90, 12, 'Filtro', 1, 0, 'C', true );
$pdf->Cell(40, 12, 'Quantidade', 1, 0, 'C', true );
$pdf->Ln();

foreach ($relatorios as $relatorio){
    $pdf->Cell(90, 12, $relatorio->filtro, 1, 0, 'C', true );
    $pdf->Cell(40, 12, $relatorio->quantidade, 1, 0, 'C', true );
    $pdf->Ln();
}  

$pdf->Ln( 12 );

$pdf->Output();

// require('./fpdf/fpdf.php');
// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->Image('../img/logos/logo.png',10,10,15,15);
// $pdf->ln();
// $pdf->ln();
// $pdf->SetFont('Arial','B',16);
// $pdf->ln(15);
// $pdf->Cell(100,7,'Filtro',1,0,"C");
// $pdf->Cell(90,7,'Quantidade',1,0,"C");
// $pdf->ln();


// foreach ($relatorios as $relatorio){
//     $pdf->Cell(36, 12, $relatorio->filtro, 1, 0, 'C', true );
//     $pdf->Cell(36, 12, $relatorio->quantidade, 1, 0, 'C', true );
//     $pdf->Ln();
// }  

// $pdf->Output();
