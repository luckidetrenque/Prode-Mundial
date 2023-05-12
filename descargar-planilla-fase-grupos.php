<?php
require_once 'Classes/db_connection.php';
require_once 'Classes/functions.php';
require_once 'Classes/fpdf/fpdf.php';

// Obtenemos el id de la planilla
if (isset($_GET["planilla"]) && $_GET["planilla"] > 0) {
//Limpiar todos los campos recibidos
$codigo = $_GET["planilla"];
$sql = "SELECT SQL_CACHE participantes_fase_grupos.* FROM participantes_fase_grupos WHERE codigo = $codigo LIMIT 1";
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
$pdf->Cell(30,6,'DATOS DEL PARTICIPANTE: ',0,1);

// Definimos el color de fuente
$pdf->SetTextColor(000);
$pdf->Cell(30,6,utf8_decode('Nombre y Apellido: '.$data[0]["nombre"].' '.$data[0]["apellido"]),0,1);
$pdf->Cell(30,6,utf8_decode('N° Afiliado: '.$data[0]["afiliado"]),0,1);
$pdf->Cell(30,6,utf8_decode('Planilla N°: '.$data[0]["codigo"]),0,1);

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
  $pdf->Cell(25,6,utf8_decode(ucwords($data[0]["grupos".++$f])),0,0,'C');
  $pdf->Cell(25,6,utf8_decode(ucwords($data[0]["grupos".++$f])),0,0,'C');
  $pdf->Cell(25,6,utf8_decode(ucwords($data[0]["grupos".++$f])),0,0,'C');
  $pdf->Cell(25,6,utf8_decode(ucwords($data[0]["grupos".++$f])),0,0,'C');
  $pdf->Cell(25,6,utf8_decode(ucwords($data[0]["grupos".++$f])),0,0,'C');
  $pdf->Cell(25,6,utf8_decode(ucwords($data[0]["grupos".++$f])),0,1,'C');
  $pdf->Ln(8);
}

// Salida del archivo y nombre
$file = $data[0]["apellido"].'-'.$data[0]["nombre"].'-'.$data[0]["afiliado"].'.pdf';
$pdf->Output('F', 'fase-grupos/participantes/'.$file);

// Archivo de desconexion a la base de datos
require_once 'Classes/db_disconnection.php';

$fileName = basename($file);
$filePath = 'fase-grupos/participantes/'.$fileName;
if(!empty($fileName) && file_exists($filePath)){
    // Define headers
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/pdf");
    header("Content-Transfer-Encoding: binary");
    
    // Read the file
    readfile($filePath);
    exit;
}else{
    echo 'The file does not exist.';
}

header ("Location:http://".$_SERVER['HTTP_HOST']);
}