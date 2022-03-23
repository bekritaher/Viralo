<?php 
include "../../Core/CommandeC.php";
include "../../Core/ProduitC.php";
$tabi = array(13,15);
setcookie('Commandes', json_encode($tabi)); 

  $tabc=json_decode($_COOKIE['Commandes'],true);


$ProduitC = new ProduitC();
$CommandeC = new CommandeC();
$tab=$CommandeC->AffichCommande();
$i=0;
$Prix =0 ;
$n = $tab->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Archs &mdash; Onepage Template by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./js/scriptP.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<script>
	$(document).ready(function(){
var n = '<?php echo $n ?>';
var i=0; 
	for (i=0;i<n;i++){
$('#'+i.toString()+'QT').change(function mb(e){
       var a = parseInt($('#'+e.target.id.substring(0,1)+'P').text().substring(1,$('#'+e.target.id.substring(0,1)+'P').text().length-1));
    	     var b = parseInt($('#'+e.target.id.substring(0,1)+'QT').val());
    	  var ID = parseInt($('#'+e.target.id.substring(0,1)+'IN').text().substring(1));
    	     if (isNaN(b))
 b= 1 ;   	     	
 		$('#'+e.target.id.substring(0,1)+'PT').text(a*b+'D');
 	$('#PT').load('ModifPCommande.php',{Prix : a*b,Quantite : b,id : ID },function(){$('#Complet').text(parseInt($('#PT').text().substring(0,$('#PT').text().length-1))+9+'D');});

})
}
})


</script>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./css/styleP.css">
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
                    <li>
                      <a href="#contacte-section" class="nav-link">Connecter vous</a>
                        <li><a href="#contact-section" class="nav-link">Crée un compte </a></li>
                        </li>
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


 <div class="wrap cf">
  <div class="heading cf">
    <h1>Votre Panier</h1>
    <a href="Produit.php" class="continue">Poursuivre votre achat</a>
  </div>
  <div class="cart">
<!--    <ul class="tableHead">
      <li class="prodHeader">Product</li>
      <li>Quantity</li>
      <li>Total</li>
       <li>Remove</li>
    </ul>-->

    <ul class="cartWrap">
    <?php
foreach ($tab as $row){
  foreach ($tabc as $rowc ) {
  if ($row['ID']==$rowc){
  $Prix=$Prix+$row['Prix'];
      ?>
     <li class="<?php if ($i%2==0){ echo 'items even'; }
            else {
            echo 'items odd' ; }?>">        
    <div class="infoWrap"> 
        <div class="cartSection">
          <?php
       $Produit= $ProduitC->GetProduit($row['Produit']);
foreach ($Produit as $rowP) {
          echo' <img src="data:image/jpeg;base64,'.base64_encode($rowP['img']).'" alt="" class="itemImg" />';
        ?>
          <p class="itemNumber" id ='<?php echo $i.'IN';?>'><?php echo '#'.$row['ID']; ?></p>
          <h3><?php
echo $rowP['nom_produit'];
?></h3>
        
           <p value='<?php echo $rowP['Prix'] ;?>' id='<?php echo $i.'P';?>'><input type="text"  class="qty" placeholder="<?php echo $row['Quantite']; ?>"  id="<?php echo $i.'QT';?>" />x<?php echo $rowP['Prix'].'D'; ?></p>
        <script type="text/javascript">
          quantite = 1 ;
        </script>
          <p class="stockStatus"> In Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p id= "<?php echo $i.'PT';?>">

<?php 
echo $rowP['Prix']*$row['Quantite'].'D';
}
 ?>
          </p>
        </div>
              <div class="cartSection removeWrap">
           <a href="SupprimerCommande.php ?id= <?php echo $row['ID'] ?>" >x</a>
        </div>
      </div>
          <?php
          $i=$i+1;
        }
      }
}
      ?>
         <div class="special"><div class="specialContent">Free gift with purchase!, gift wrap, etc!!</div></div>
      </li>
      <!--<li class="items even">Item 2</li>-->
    </ul>
  </div>
  
  <div class="promoCode"><label for="promo">Vous-avez un code promo ?</label><input type="text" name="promo" placholder="Enter Code" />
  <a href="#" class="btn"></a></div>
  
  <div class="subtotal cf">
    <ul>
      <li class="totalRow"><span class="label">Complet</span><span class="value" id ="PT"><?php echo $Prix.'D' ?></span></li>
      
          <li class="totalRow"><span class="label">Livraison</span><span class="value">5.00D</span></li>
      
            <li class="totalRow"><span class="label">Tax</span><span class="value">4.00D</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value" id ='Complet'><?php echo ($Prix+9).'D' ?></span></li>
      <li class="totalRow"><a href="#" class="btn continue">Finaliser</a></li>
    </ul>
  </div>
</div>
<!-- partial -->



    


        

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