<?php  include_once 'session.php'; ?>
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
        <script type="text/javascript">
            function verif()
                                    {
                                    var verif=0;
                                        if(parseInt(window.document.produitM.prixM.value)!=(window.document.produitM.prixM.value))
                                            {

                                         document.produitM.prixM.style.borderColor="red";
                                                verif=1;
                                            }
                                    else
                                    {

                                         document.produitM.prixM.style.borderColor="#e5e5e5";
                                        
                                    }

                                    if(parseInt(window.document.produitM.quantiteM.value)!=(window.document.produitM.quantiteM.value))
                                    {

                                        document.produitM.quantiteM.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        
                                        document.produitM.quantiteM.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produitM.idproduitM.value.length==0)
                                    {
                                        document.produitM.idproduitM.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        document.produitM.idproduitM.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produitM.marqueM.value.length==0)
                                    {
                                        document.produitM.marqueM.style.borderColor="red";
                                        verif=1;
                                    }

                                    else 
                                    {
                                        document.produitM.marqueM.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produitM.descriptionM.value.length==0)
                                    {
                                        document.produitM.descriptionM.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        document.produitM.descriptionM.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produitM.couleurM.value.length==0)
                                    {
                                        document.produitM.couleurM.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        document.produitM.couleurM.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produitM.nomM.value.length==0)
                                    {
                                        document.produitM.nomM.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        document.produitM.nomM.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(verif==1)
                                    {
                                        return false;
                                    }
                                    else
                                        {
                                            return true;
                                        }
                   
                
                                    
                                    }
        </script>

    </head>


    <body class="fixed-left">



        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Admin<span>to</span></span><i class="mdi mdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Page title -->
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">Produits</h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li>
                                    <!-- Notification -->
                                    <div class="notification-box">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a href="javascript:void(0);" class="right-bar-toggle">
                                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                                </a>
                                                <div class="noti-dot">
                                                    <span class="dot"></span>
                                                    <span class="pulse"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Notification bar -->
                                </li>

                                <li class="hide-phone">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..."
                                               class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>

                            </ul>
                        </nav>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php  include_once 'left-bar.php'; ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <form action="modifiercheck.php" enctype="multipart/form-data" method="POST" name="produitM" onsubmit="return verif(this)">
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Modifier un Produit</b></h4>
                                   

										<div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                            	<?PHP

															require '../core/produitC.php';
															
															$pr=new ProduitManage();
													    	$result=$pr->recupererProduit($_GET['id']);
														foreach($result as $row){
															$id=$row['produit_id'];
															$description=$row['produit_description'];
															$prix=$row['produit_prix'];
															$quantite=$row['produit_qte'];
															$nom=$row['produit_nom'];
                                                            $categorie=$row['produit_categorie'];
                                                            $marque=$row['produit_marque'];
                                                            $forme=$row['produit_forme'];
                                                            $couleur=$row['produit_couleur'];

															
													?>
                                                
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">ID Produit</label>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $id ?>"
                                                            name="idproduitM">
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Marque</label>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $marque ?>"
                                                            name="marqueM">
                                                        </div>
                                                        </div>
                                                       <div class="form-group row">
                                                        <label class="col-2 col-form-label">Categorie</label>
                                                        <div class="col-5">
                                                            <select name="categorieM" size="1" style="width:400px" value="<?php echo $categorie ?>">
                                                              <option name="optique" value="optique">Optique</option>
                                                              <option name="solaire" value="solaire">Solaire</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nom</label>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $nom ?>" name="nomM">
                                                        </div>

                                                    </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label"> Description</label>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $description ?>" name="descriptionM">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Forme</label>
                                                        
                                                        <select name="formeM" size="1" style="width:400px">
                                                              <option name="rectangulaire" value="rectangulaire">Rectangulaire</option>
                                                              <option name="carré" value="carré">Carré</option>
                                                               <option name="Ronde/Ovale" value="Ronde/Ovale">Ronde/Ovale</option>
                                                               <option name="Aviateur" value="Aviateur">Aviateur</option>
                                                               <option name="Classique" value="Classique">Classique</option>

                                                               <option name="Cat Eyes" value="Cat Eyes">Cat Eyes</option>

                                                               <option name="Papillon" value="Papillon">Papillon</option>
                                                            </select>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Couleur</label>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $couleur ?>"
                                                            name="couleurM">
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-2 col-form-label">Prix</label>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $prix ?>"
                                                            name="prixM">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Quantite</label>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $quantite ?>"
                                                            name="quantiteM">
                                                        </div>
                                                    </div>
                                                        <?php 
                                                        include_once '../core/imageC.php';  
                                                                $ph=new ImagesManage();
                                                                $tt=$ph->afficherImage($id);
                                                            ?>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Images du produit</label>
                                                        <div class="col-1">
                                                                <?php 
                                                                foreach ($tt as $aa) { ?>
                                                                    
                                                                <img src="<?php echo  "../mimosa/img/product/".$aa['nom'] ?>" width="100" height="100" alt="product" class="primary"/>
                                                                <?php echo $aa['nom'] ?>
                                                                <input type="hidden" name="nomIm" value="<?php echo $aa['nom'] ?>">
                                                                
                                                              <?php   } ?>
                                                        </div>
                                                    </div>
                                            

                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image1</label>

                                                        <div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="imageM">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image2</label>

                                                        <div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="image2M">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image3</label>

                                                        <div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="image3M">
                                                        </div>
                                                    </div>
                                                    
	                                                     
                                                    <p align="center">
                                                        <br>
                                                    <button type="submit" name="modif" class="btn btn-primary">Valider</button>
                                                    
                                                    <?php } ?>
                                                
                                            </div>
                                        </div>
													
													
													
                                               

                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->





                        
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 - 2018 © Adminto. Coderthemes.com
                </footer>

            </div>
        </form>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li> 

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



    </body>
</html>