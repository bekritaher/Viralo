<?PHP
//include "../config.php";
class PromotionC {
function afficherPromotion ($cat)
	{
		echo "Id promotion: ".$cat->getId()."<br>";
		echo "Nom produit: ".$cat->getNom()."<br>";
		echo "image produit: ".$cat->getImg()."<br>";
		echo "pourcentage promotion: ".$cat->getPourc()."<br>";
	
	}
	/*function calculerSalaire($event){
		echo $event->getDescription() * $event->getDescription();
	}*/
	function ajouterPromotion($cat){
		$sql="insert into promotion (id,nom,img,pourc) values (:id, :nom,:img,:pourc)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $id=$cat->getId();
        $nom=$cat->getNom();
        $img=$cat->getImg();
        $pourc=$cat->getPourc();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':img',$img);
		$req->bindValue(':pourc',$pourc);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPromotions(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromotion($id){
		$sql="DELETE FROM promotion where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPromotion($cat,$id){
		$sql="UPDATE promotion SET id=:idd, nom=:nom,img=:img,pourc=:pourc WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$cat->getId();
        $nom=$cat->getNom();
        $img=$cat->getImg();
        $pourc=$cat->getPourc();

		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':img'=>$img,':pourc'=>$pourc);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':img',$img);
		$req->bindValue(':pourc',$pourc);


		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromotion($id){
		$sql="SELECT * from promotion where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePromotion($nom){
		$sql="SELECT * from promotion where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>