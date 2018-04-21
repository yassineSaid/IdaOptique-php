<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 800px;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 800px;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 800px;
            display: block;
            text-align: center;
        }
    }
    tbody:before, tbody:after { display: none; }
    thead:before, thead:after { display: none; }
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="img/ida1.png" style="width:25%; max-width:300px; background-color: black;">
                            </td>
                            
                            <td>
                                <?php
                                    include_once '../core/commandeC.php';
                                    $comm=new CommandeC();
                                    $info=$comm->afficherInfoCommande($_GET["id_commande"]);
                                    $date = strtotime($info['date']);
                                    $dateV = date("d/m/Y", $date);
                                    $listeLigneCommande=$comm->afficherLigneCommande($_GET["id_commande"]);
                                    $total=0;
                                ?>
                                ID de la commande: <?php echo $_GET["id_commande"] ?><br>
                                Date de création: <?php echo $dateV ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                IDA Optique<br>
                                Avenue Hedi Nouira - Résidence la Coupole<br>
                                Ennasr II, Ariana, Tunisie
                            </td>
                            
                            <td>
                                <?php echo ucfirst($info['nom'])." ".ucfirst($info['prenom']) ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Produit
                </td>
                
                <td>
                    Prix
                </td>
            </tr>
            <?php foreach($listeLigneCommande as $row){ ?>
            <tr class="item">
                <td>
                    <?PHP echo $row['produit_nom']; ?> x <?PHP echo $row['qte']; ?>
                </td>
                
                <td>
                    <?PHP echo number_format($row['produit_prix']*$row['qte'],3); ?> DT
                </td>
            </tr>
            <?php $total+=$row['produit_prix']*$row['qte'];} ?>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: <?PHP echo number_format($total,3); ?> DT
                </td>
            </tr>
        </table>
    </div>
    <a href="<?php echo  "facturePdf.php?id_commande=".$row['id_commande'] ?>">Exporter PDF</a>
    <?php //$html = file_get_contents('listeCommandes.php',FILE_USE_INCLUDE_PATH); 
    //echo $html;
    //$string = get_include_contents('listeCommandes.php');

/*function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        $contents = ob_get_contents();
        ob_end_clean();
        //echo $contents;
        return $contents;
    }
    return false;
}*/
    ?>
</body>
</html>