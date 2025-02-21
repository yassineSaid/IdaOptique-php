<?php // content="text/plain; charset=utf-8"
require_once ('/jpgraph-4.2.0/src/jpgraph.php');
require_once ('/jpgraph-4.2.0/src/jpgraph_bar.php');
require_once '../config.php';
//bar linear fix

$query="SELECT * FROM `reclamation`   ";
$db= config::getConnexion();
$Data1 =  $db->query($query);
//$Data2 = $db->query($query);
$datay=array();
$datax=array();

foreach ($Data1 as $row){
$datay[]=$row['age'];
}
//while($row2 = mysqli_fetch_array($Data2)){
//$datax[]=$row2['total'];
//}
// Create the graph. These two calls are always required
$graph = new Graph(700,400,"auto");
$graph->SetScale('textlin');
 
$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);
// Adjust the margin a bit to make more room for titles
$graph->SetMargin(40,30,20,40);
$graph->SetBox(false);
// Create a bar pot
$bplot = new BarPlot($datay);
$fcol='#440000';
$tcol='#FF9090';
$bplot->SetFillGradient($fcol,$tcol,GRAD_LEFT_REFLECTION);
// Adjust fill color
$bplot->SetColor("white");
$bplot->SetFillColor("#cc1111");
$graph->Add($bplot);
// Setup the titles
//$graph->title->Set('A basic bar graph');
$graph->xaxis->title->Set('nbr client');
$graph->yaxis->title->Set('age');
$graph->title->SetFont(FF_TIMES,FS_BOLD);
$graph->yaxis->title->SetFont(FF_TIMES,FS_BOLD);
$graph->xaxis->title->SetFont(FF_TIMES,FS_BOLD);
$graph->xaxis->SetTickLabels($datax);
//$graph->xaxis->SetLabelAngle(50);
$graph->xaxis->SetTextTickInterval(1);
// Display the graph
$graph->Stroke("./stat.jpg");
?>