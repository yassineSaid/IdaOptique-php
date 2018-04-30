 <?php  include 'session.php'; ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="ex-page-content text-center">

                                      <?php
                                         

                                        require '../core/offremanage.php';
                                       
                                        $off= new OffreManage();
                                        $idoffre=$_POST['idoffre'];
                                        $liste=$off->recupererOffre($idoffre);





                                    ?>
                                    

                                     <?php
                                    foreach ($liste as $val) 
                                    $idproduit=$val['produit_id'];
                                   $list=$off->recupererProduit($idproduit);
                                    {
                                        foreach ($list as $row) 

                                        {

                                        ?>


                <h3 class="text-uppercase font-600">Offre Spéciale</h3>
                <div class="text-error"> <?php echo $val['nom']?> </div>
                <h3 class="text-uppercase font-600">Vous avez une réduction de </h3>
                <div class="logo"> <?php echo $val['pourcentage']?>% </div>
                <h3 class="text-uppercase font-600">sur chaque commade du produit </h3>
                <div class="text-error"> <?php echo $row['produit_nom']?></div>
                <div> <img src="<?php echo  "../mimosa/img/tsawer/".$row['nom'].".jpg" ?>" width="400" height="250" alt="product" class="primary"/>
                    <div></div>



                 <div>  
                    <form method="POST" action="offrePDF.php">
                  <button class="btn btn-success waves-effect waves-light"> PDF  </button>  
                 <input type="hidden" name="idoffre"  value="<?php echo $val['idOffre']?>" >
                    </form>
                  </div>

                </div>

                     



                


         
            

                 <?php }} ?>

            </div>
        </div>
        <!-- end wrapper page -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>