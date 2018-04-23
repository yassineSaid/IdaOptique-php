<?php


// instantiate and use the dompdf class


  $myfile = fopen("toPrint.html", "w") or die("Unable to open file!");
  $url="http://127.0.0.1/code/mimosa/afficherFacturePdf.php?id_commande=".$_GET['id_commande'];
  $lines=file($url);
  foreach($lines as $line_num => $line) {
    //$line = htmlentities($line);
    //$line = str_replace("<", "<span><", $line);
    //$line = str_replace(">", "></span>", $line);
    //$line = str_replace("<!–", "<em><!–", $line);
    $line = str_replace("Exporter PDF", "", $line);
    fwrite($myfile, $line);
  }
fclose($myfile);

//$string = get_include_contents('afficherFacture.php?id_commande=1');

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    return false;
}
$string = get_include_contents("toPrint.html");
include 'mpdf/mpdf.php';
$mpdf=new mPDF('L');
$mpdf->writeHTML($string);
$mpdf->Output('document.pdf','I');

/*$dompdf = new Dompdf();
$dompdf->loadHtml($string);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
$dompdf->set_option('isHtml5ParserEnabled','DOMPDF_ENABLE_CSS_FLOAT','DEBUG_LAYOUT','DEBUG_LAYOUT_LINES','DEBUG_LAYOUT_INLINES','DEBUG_LAYOUT_INLINES', TRUE);

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();*/

?>