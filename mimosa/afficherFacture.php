
<!DOCTYPE html>
<html>
<head>
    <title>HTML to API - Invoice</title>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="content-type" content="text-html; charset=utf-8">
    <style type="text/css">
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            font-size: 100%;
            vertical-align: baseline;
        }

        html {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        caption, th, td {
            text-align: left;
            font-weight: normal;
            vertical-align: middle;
        }

        q, blockquote {
            quotes: none;
        }
        q:before, q:after, blockquote:before, blockquote:after {
            content: "";
            content: none;
        }

        a img {
            border: none;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
            display: block;
        }

        body {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 300;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }
        body a {
            text-decoration: none;
            color: inherit;
        }
        body a:hover {
            color: inherit;
            opacity: 0.7;
        }
        body .container {
            min-width: 500px;
            margin: 0 auto;
            padding: 0 20px;
        }
        body .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
        body .left {
            float: left;
        }
        body .right {
            float: right;
        }
        body .helper {
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }
        body .no-break {
            page-break-inside: avoid;
        }

        header {
            margin-top: 20px;
            margin-bottom: 50px;
        }
        header figure {
            float: left;
            width: 60px;
            height: 60px;
            margin-right: 10px;
            background-color: none;
            border-radius: 50%;
            text-align: center;
        }
        header figure img {
            width: 80px;
            height: 80px;
        }
        header .company-address {
            float: left;
            max-width: 150px;
            line-height: 1.7em;
        }
        header .company-address .title {
            color: #696969;
            font-weight: 400;
            font-size: 1.5em;
            text-transform: uppercase;
        }
        header .company-contact {
            float: right;
            height: 60px;
            padding: 0 10px;
            background-color: #696969;
            color: white;
        }
        header .company-contact span {
            display: inline-block;
            vertical-align: middle;
        }
        header .company-contact .circle {
            width: 20px;
            height: 20px;
            background-color: white;
            border-radius: 50%;
            text-align: center;
        }
        header .company-contact .circle img {
            vertical-align: middle;
        }
        header .company-contact .phone {
            height: 100%;
            margin-right: 20px;
        }
        header .company-contact .email {
            height: 100%;
            min-width: 100px;
            text-align: right;
        }

        section .details {
            margin-bottom: 55px;
        }
        section .details .client {
            width: 50%;
            line-height: 20px;
        }
        section .details .client .name {
            color: #696969;
            font-size: 1.5em;
        }
        section .details .data {
            width: 50%;
            text-align: right;
        }
        section .details .title {
            margin-bottom: 15px;
            color: #696969;
            font-size: 2em;
            font-weight: 400;
            text-transform: uppercase;
        }
        section table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 1.5em;
        }
        section table .qty, section table .unit, section table .total {
            width: 15%;
        }
        section table .desc {
            width: 55%;
        }
        section table thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }
        section table thead th {
            padding: 5px 10px;
            background: #696969;
            border-bottom: 5px solid #FFFFFF;
            border-right: 4px solid #FFFFFF;
            text-align: right;
            color: white;
            font-weight: 400;
            text-transform: uppercase;
        }
        section table thead th:last-child {
            border-right: none;
        }
        section table thead .desc {
            text-align: left;
        }
        section table thead .qty {
            text-align: center;
        }
        section table tbody td {
            padding: 10px;
            background: #E8F3DB;
            color: #777777;
            text-align: right;
            border-bottom: 5px solid #FFFFFF;
            border-right: 4px solid #E8F3DB;
        }
        section table tbody td:last-child {
            border-right: none;
        }
        section table tbody h3 {
            margin-bottom: 5px;
            color: #696969;
            font-weight: 600;
        }
        section table tbody .desc {
            text-align: left;
        }
        section table tbody .qty {
            text-align: center;
        }
        section table.grand-total {
            margin-bottom: 45px;
        }
        section table.grand-total td {
            padding: 5px 10px;
            border: none;
            color: #777777;
            text-align: right;
        }
        section table.grand-total .desc {
            background-color: transparent;
        }
        section table.grand-total tr:last-child td {
            font-weight: 600;
            color: #696969;
            font-size: 1.18181818181818em;
        }

        footer {
            margin-bottom: 20px;
        }
        footer .thanks {
            margin-bottom: 40px;
            color: #696969;
            font-size: 1.16666666666667em;
            font-weight: 600;
        }
        footer .notice {
            margin-bottom: 25px;
        }
        footer .end {
            padding-top: 5px;
            border-top: 2px solid #696969;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
                                    include_once '../core/commandeC.php';
                                    $comm=new CommandeC();
                                    $info=$comm->afficherInfoCommande($_GET["id_commande"]);
                                    $date = strtotime($info['date']);
                                    $dateV = date("d/m/Y", $date);
                                    $listeLigneCommande=$comm->afficherLigneCommande($_GET["id_commande"]);
                                    $total=0;
                                ?>
    <header class="clearfix">
        <div class="container">
            <figure>
                <img class="logo" src="img/ida2.png">
            </figure>
            <div class="company-address">
                <h2 class="title">IDA Optique</h2>
                <p>
                    Avenue Hedi Nouira - Résidence la Coupole<br>
                    Ennasr II, Ariana, Tunisie
                </p>
            </div>
            <div class="company-contact">
                <div class="phone left">
                    <span class="helper"></span>
                    <a href="tel:70851322">70 851 322</a>
                    <span class="helper"></span>
                </div>
                <div class="email right">
                    <span class="helper"></span>
                    <a href="mailto:ida.optique@yahoo.fr">ida.optique@yahoo.fr</a>
                    <span class="helper"></span>
                </div>
            </div> 
        </div>
    </header>

    <section>
        <div class="container">
            <div class="details clearfix">
                <div class="client left">
                    <p style="font-size: 1.5em;">Facture de:</p>
                    <p class="name"><?php echo ucfirst($info['nom'])." ".ucfirst($info['prenom']) ?></p>
                    <p></p>
                    <a href="mailto:john@example.com"></a>
                </div>
                <div class="data right">
                    <div class="title">ID de la commande: <?php echo $_GET["id_commande"] ?></div>
                    <div class="date" style="font-size: 1.2em;">
                        Date de facturation: <?php echo $dateV ?><br>
                    </div>
                </div>
            </div>

            <table border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th class="desc">Nom</th>
                        <th class="qty">Quantité</th>
                        <th class="unit">Prix unitaire</th>
                        <th class="total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($listeLigneCommande as $row){ ?>
                    <tr>
                        <td class="desc"><h3><?PHP echo $row['produit_nom']; ?></h3></td>
                        <td class="qty"><?PHP echo $row['qte']; ?></td>
                        <td class="unit"><?PHP echo number_format($row['produit_prix'],3); ?> DT</td>
                        <td class="total"><?PHP echo number_format($row['produit_prix']*$row['qte'],3); ?> DT</td>
                    </tr>
                    <?php $total+=$row['produit_prix']*$row['qte'];} ?>
                </tbody>
            </table>
            <div class="no-break">
                <table class="grand-total">
                    <tbody>
                        <tr>
                            <td class="desc"></td>
                            <td class="unit" colspan="2">TOTAL:</td>
                            <td class="total"><?PHP echo number_format($total,3); ?> DT</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer style="margin: auto; text-align: center;">
        <div class="container">
            <div class="notice">
                <a href="<?php echo  "facturePdf.php?id_commande=".$row['id_commande'] ?>" style="font-size: 2em; font-weight: 350;"><b>Exporter PDF</b></a>
            </div>
        </div>
    </footer>

</body>

</html>
