<?PHP
include "../../core/PromotionC.php";
include "../../config.php";
$promotionC=new PromotionC();
if (isset($_POST["id"])){
	$promotionC->supprimerPromotion($_POST["id"]);
	header('Location: AfficherPromotion.php');
}

?>