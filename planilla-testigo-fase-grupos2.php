<?php
require_once 'Classes/db_connection.php';
require_once 'Classes/functions.php';
require_once 'Classes/fpdf/fpdf.php';

$today = date('d/m/Y',time()-18000);//+5 horas de diferencia

//Limpiar todos los campos recibidos
$sql = "SELECT SQL_CACHE resultados_fase_grupos.* FROM resultados_fase_grupos";
$data = selectData($conexion,$sql);

class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{

$this->widths=$w;
}

function SetAligns($a)
{

$this->aligns=$a;
}

function Row($data)
{

$nb=0;
for($i=0;$i<count($data);$i++)
$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
$h=8*$nb;

$this->CheckPageBreak($h);

for($i=0;$i<count($data);$i++)
{
$w=$this->widths[$i];
$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'C';

$x=$this->GetX();
$y=$this->GetY();


$this->Rect($x,$y,$w,$h);

$this->MultiCell($w,8,$data[$i],0,$a,'true');

$this->SetXY($x+$w,$y);
}

$this->Ln($h);
}

function CheckPageBreak($h)
{

if($this->GetY()+$h>$this->PageBreakTrigger)
$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{

$cw=&$this->CurrentFont['cw'];
if($w==0)
$w=$this->w-$this->rMargin-$this->x;
$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
$s=str_replace("\r",'',$txt);
$nb=strlen($s);
if($nb>0 and $s[$nb-1]=="\n")
$nb--;
$sep=-1;
$i=0;
$j=0;
$l=0;
$nl=1;
while($i<$nb)
{
$c=$s[$i];
if($c=="\n")
{
$i++;
$sep=-1;
$j=$i;
$l=0;
$nl++;
continue;
}
if($c==' ')
$sep=$i;
$l+=$cw[$c];
if($l>$wmax)
{
if($sep==-1)
{
if($i==$j)
$i++;
}
else
$i=$sep+1;
$sep=-1;
$j=$i;
$l=0;
$nl++;
}
else
$i++;
}
return $nl;
}

function Header()
{
$this->Image('img/upj_logo.gif', 20 ,0, 30, 30,'GIF');
$this->SetFont('Helvetica','B',10);
$this->Text(90,14,utf8_decode('PRODE MUNDIAL QATAR 2022'),0,'C', 0);
$this->Ln(20);
}

function Footer()
{
$this->SetY(-15);
$this->SetFont('Helvetica','B',8);
$this->Cell(100,10,utf8_decode('Unión Personal Jerárquico del Banco de la Provincia de Buenos Aires'),0,0,'L');

}

}


// Creamos nuestro objeto pdf
$pdf=new Pdf();
// Agregamos una pagina al archivo
$pdf->AddPage();
// Personalizamos los amrgenes
$pdf->SetMargins(20,20,20);
// Creamos un espacio
$pdf->Ln(10);
// Definimos la fuente y tamaño
$pdf->SetFont('Helvetica','',12);
// Definimos el color de fuente
$pdf->SetTextColor(56, 120, 135);
// Creamos una celda para mostrar la información
$pdf->Cell(30,6,'PLANILLA TESTIGO DE CONTROL',0,1);

$pdf->SetTextColor(000);
$pdf->Cell(30,6,utf8_decode('Resultados de los partidos disputados hasta el día '.$today.'.'),0,1);

$pdf->Ln(8);

$pdf->SetWidths(array(30, 25, 25, 25, 25, 25, 25,));

$f = 0;
for ($i= 1; $i <= 8; $i++){
  $j = 0;
  $pdf->SetFont('Helvetica','B',11);
  // $pdf->SetDrawColor(0,0,0);
  $pdf->SetFillColor(56, 120, 135);
  $pdf->SetTextColor(255);
  // usamos nuestra funcion creada para listar celdas con varias lineas
  $pdf->Row(array('', 'FECHA '.++$j, 'FECHA '.++$j, 'FECHA '.++$j, 'FECHA '.++$j, 'FECHA '.++$j, 'FECHA '.++$j));
  $pdf->SetFont('Helvetica','',10);
  $pdf->SetTextColor(000);
  $pdf->Cell(30,6,utf8_decode('GRUPO '.$grupos[$i-1]),0,0);

  $pdf->Cell(25,6,$pdf->Image('img/flags/flags-png/'.$data[0]["grupos".++$f].'.png', $pdf->GetX(), $pdf->GetY(), 0, 0,'PNG'),0,0,'C');
  $pdf->Cell(25,6,$pdf->Image('img/flags/flags-png/'.$data[0]["grupos".++$f].'.png', $pdf->GetX(), $pdf->GetY(), 0, 0,'PNG'),0,0,'C');
  $pdf->Cell(25,6,$pdf->Image('img/flags/flags-png/'.$data[0]["grupos".++$f].'.png', $pdf->GetX(), $pdf->GetY(), 0, 0,'PNG'),0,0,'C');
  $pdf->Cell(25,6,$pdf->Image('img/flags/flags-png/'.$data[0]["grupos".++$f].'.png', $pdf->GetX(), $pdf->GetY(), 0, 0,'PNG'),0,0,'C');
  $pdf->Cell(25,6,$pdf->Image('img/flags/flags-png/'.$data[0]["grupos".++$f].'.png', $pdf->GetX(), $pdf->GetY(), 0, 0,'PNG'),0,0,'C');
  $pdf->Cell(25,6,$pdf->Image('img/flags/flags-png/'.$data[0]["grupos".++$f].'.png', $pdf->GetX(), $pdf->GetY(), 0, 0,'PNG'),0,1,'C');
  $pdf->Ln(8);
}

$pdf->SetFont('Helvetica','',8);
$pdf->SetFillColor(255, 255, 255);
$pdf->Multicell(180,6,utf8_decode('(*) Los 4 partidos jugados entre el Domingo 20 y el Lunes 21 de Noviembre, si bien están incluidos dentro de la planilla, se tomaran como Empate (E) ya que fueron jugados con anterioridad al vencimiento de presentación de la planilla.'),0,1,'R');

// Salida del archivo y nombre
$file = 'planilla-testigo-fase-grupos.pdf';
$pdf->Output('I', $file);

// Archivo de desconexion a la base de datos
require_once 'Classes/db_disconnection.php';

// $fileName = basename($file);
// $filePath = 'fase-grupos/participantes/'.$fileName;
// if(!empty($fileName) && file_exists($filePath)){
//     // Define headers
//     header("Cache-Control: public");
//     header("Content-Description: File Transfer");
//     header("Content-Disposition: attachment; filename=$fileName");
//     header("Content-Type: application/pdf");
//     header("Content-Transfer-Encoding: binary");
    
//     // Read the file
//     readfile($filePath);
//     exit;
// }else{
//     echo 'The file does not exist.';
// }

// header ("Location:http://".$_SERVER['HTTP_HOST']);