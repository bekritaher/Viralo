<?php 
include "../../Core/CommandeC.php";
include "../../Core/ProduitC.php";
$CommandeC = new CommandeC();
$ProduitsC = new ProduitC();
$Panier = $CommandeC->AffichCommande();
$produits = $ProduitsC->AffichProduit();
$i=0;
$Num=$Panier->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Archs &mdash; Onepage Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
        <link rel="stylesheet" type="text/css" href="css/Panier.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">deco-pierre@gmail.com</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+21629403488</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><a href="index.html">Deco Pierre</a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li>
                      <a href="#home-section" class="nav-link">Home</a>
                    </li>
                    <li class="has-children">
                      <a href=" href="index.html" class="nav-link">À propos de nous</a>
                      <ul class="dropdown arrow-top">
                        <li><a  href="index.html" class="nav-link">Partenaire</a></li>
                        <li><a  href="index.html" class="nav-link">FAQ</a></li>

                        </li>
                      </ul>
                    </li>
                    <li><a   href="index.html" class="nav-link">Show Roms</a></li>
                    <li>
                      <a  href="index.html" class="nav-link">Catégories</a>
                    </li>
                    <li><a href="#contact-section" class="nav-link">Réclamation</a></li>
                                        <li><a  href="#contact-section" class="nav-link">Compte</a></li>
<li>
  <a href="Panier.php">
  <div class="cadre">
<i class="fas fa-cart-arrow-down"></i>
<span class="num"><?php echo $Num  ?></span>    
  </div>
  </a>
</li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"id="home-section">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-8">
            <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="play-button d-block">
              <span class="icon-play"></span>
            </a>
            <h1 class="text-uppercase">REINVENTEZ VOTRE VIE</h1>
            <span class="sub-text mb-3 d-block"><em>Des pierres du monde entier juste pour le plaisir de vos yeux</em></span>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="site-section" id="projects-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Nos Produits</span>
            <h2 class="font-weight-bold text-black">Produits</h2>
            <p class="mb-5">Notre variante de collection de pierres.</p>
          </div>
        </div>
        <div class="row">
 <?php 
              foreach ($produits as $row ) {
        ?>
          <div class="col-lg-4 col-md-6 mb-4 project-entry">
                <?php
         echo   ' <a href="data:image/jpeg;base64,'.base64_encode($row['img']).'" class="d-block figure" data-fancybox="gallery">';
          echo   ' <img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" alt="Image" class="img-fluid" />';
?>
            </a>
            <table>
             
              <tr>
                <td>
            <h3 class="mb-0"><a href=""><?php echo $row['nom_produit']; ?></a></td>
              <td>
                                <a href="AjoutCommande.php ?id= <?php echo $row['id_produit']; ?>">
             <div class="cadreAj"><div class="fas fa-cart-plus"></div></div></h3></td></a>  </tr>
            </table>
 
          </div>

                        <?php 
      }
      ?>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section" id="news-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <span class="sub-title">nos promotions</span>
            <h2 class="font-weight-bold text-black mb-5">Promotions</h2>
          </div>
        </div>

          <div class="col-lg-4 col-md-6 mb-4 project-entry">
             <a href="single.html" class="link-product-add-cart">Quick View</a>

            <a href="images/img_1.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </a>
            <table>
              <tr>
                <td>
            <h3 class="mb-0"><a href="">Architectural Art Modern</a></td>
              <td>
                                <a href="AjoutCommande.php ?id= <?php echo 1 ?>">
             <div class="cadreAj"><div class="fas fa-cart-plus"></div></div></h3></td></a>  </tr>
            </table>
           
          </div>

                    <div class="col-lg-4 col-md-6 mb-4 project-entry">
            <a href="images/img_2.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </a>
            <table>
              <tr>
                <td>
            <h3 class="mb-0"><a href="">Architectural Art Modern</a></td>
              <td>
                                <a href="AjoutCommande.php ?id= <?php echo 1 ?>">
             <div class="cadreAj"><div class="fas fa-cart-plus"></div></div></h3></td></a>  </tr>
            </table>
           
          </div>

                    <div class="col-lg-4 col-md-6 mb-4 project-entry">
            <a href="images/img_3.jpg" class="d-block figure" data-fancybox="gallery">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </a>
            <table>
              <tr>
                <td>
            <h3 class="mb-0"><a href="">Architectural Art Modern</a></td>
              <td>
                                <a href="AjoutCommande.php ?id= <?php echo 1 ?>">
             <div class="cadreAj"><div class="fas fa-cart-plus"></div></div></h3></td></a>  </tr>
            </table>
           
          </div>


        <div class="row mt-5 text-center">
          <div class="col-12">
            <p><a href="#" class="btn btn-primary btn-lg rounded-0">View All Posts</a></p>
          </div>
        </div>
      </div>
    </div>
 
    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
            </div>
          

           
            <div align="text-center">
                <h3 class="footer-heading mb-4">Suivez-nous</h3>
                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
            </div>


        
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

  
  </body>
</html>