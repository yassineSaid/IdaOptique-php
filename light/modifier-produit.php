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
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        <h5><a href="#">Mat Helme</a> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" >
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="text-custom">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="index.html" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li>
                                <a href="typography.html" class="waves-effect"><i class="mdi mdi-format-font"></i> <span> Typography </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-material-icons.html">Material Design Icons</a></li>
                                    <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li>
                                    <li><a href="ui-dripicons.html">Dripicons</a></li>
                                    <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-range-slider.html">Range Slider</a></li>
                                    <li><a href="ui-components.html">Components</a>
                                    <li><a href="ui-sweetalert.html">Sweet Alert</a>
                                    <li><a href="ui-treeview.html">Tree view</a>
                                    <li><a href="ui-widgets.html">Widgets</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right">7</span><span> Forms </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-fileupload.html">Form Uploads</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-list"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                                </ul>
                            </li>

                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i><span> Gestion des Produits </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ajout-produit.html">Ajouter un produit</a></li>
                                    <li><a href="affichage-produit.php">Liste des produits</a></li>
                                   
                                </ul>
                            </li>


                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li>
                                <a href="inbox.html" class="waves-effect"><i class="mdi mdi-email"></i><span class="badge badge-purple pull-right">New</span><span> Mail </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Extra Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-projects.html">Projects</a></li>
                                    <li><a href="extras-tour.html">Tour</a></li>
                                    <li><a href="extras-taskboard.html">Taskboard</a></li>
                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-maps.html">Maps</a></li>
                                    <li><a href="extras-contact.html">Contact list</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-email-template.html">Email template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming soon</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
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
                                                                $tt=$ph->afficherImage($_GET['id']);
                                                            ?>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Images du produit</label>
                                                        <div class="col-5">
                                                                <?php 
                                                                foreach ($tt as $aa) { ?>
                                                                    
                                                                <img src="<?php echo  "img/product/".$aa['nom'] ?>" alt="product" class="primary"/>
                                                              <?php   } ?>
                                                        </div>
                                                    </div>
                                            

                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image1</label>

                                                        <div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="image">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image2</label>

                                                        <div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="image2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image3</label>

                                                        <div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="image3">
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