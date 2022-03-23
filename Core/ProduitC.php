<?php 
if (!(class_exists('config'))){
include "../../config.php";
}
Class ProduitC {
	function ajouterProduit($cat){
		
		$sql="INSERT INTO `produit` (`id_produit`, `nom_produit`, `reference`, `quantite`, `idca`, `prix`, `img`, `description`, `promotion`) VALUES (:id_produit,:nom_produit,:reference, :quantite,:idca,:prix,:img,:description,:promotion)";
	$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $id_produit=$cat->getId_produit();
        $nom_produit=$cat->getNom_produit();
        $reference=$cat->getReference();
        $quantite=$cat->getQuantite();  
        $idca=$cat->getIdca();
        $prix=$cat->getPrix();
        $img=$cat->getImg();
        $description=$cat->getDescription();
        $promotion=$cat->getPromotion();

       
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':idca',$idca);$idca;
		$req->bindValue(':prix',$prix);
		$req->bindValue(':img',$img);
		$req->bindValue(':description',$description);
		$req->bindValue(':promotion',$promotion);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
function AffichProduit()
{
$sq2 = "select * from produit";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sq2); 
return $liste;
	}
	catch(Exception $ee){
 echo 'Erreur: '.$ee->getMessage();
	}
}


function supprimerProduit($id_produit)
{
		$sql="DELETE FROM produit where id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}

	function ModifierProduit($cat,$id_produit)
	{
		$sql="UPDATE produit SET id_produit=:id_produits, nom_produit=:nom_produit,reference=reference,quantite=quantite,idca=idca,img=:img,description=description,promotion=promotion WHERE id_produit=:id_produit";
		
		$db = config::getConnexion();

		try{		
        $req=$db->prepare($sql);
        $id_produit=$cat->getId_produit();
        $nom_produit=$cat->getNom_produit();
        $reference=$cat->getReference();
        $quantite=$cat->getQuantite();  
        $idca=$cat->getIdca();
        $prix=$cat->getPrix();
        $img=$cat->getImg();
        $description=$cat->getDescription();
        $promotion=$cat->getPromotion();

        
		$datas = array(':id_produits'=>$id_produits, ':id_produit'=>$id_produit, ':nom_produit'=>$nom_produit, ':reference'=>$reference, ':quantite'=>$quantite, ':idca=>$idca', ':prix'=>$prix, ':img'=>$img, ':description'=>$description, ':promotion'=>$promotion);

		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':id_produits',$id_produits);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':idca',$idca);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':img',$img);
		$req->bindValue(':description',$description);
		$req->bindValue(':promotion',$promotion);

	

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
		function recupererProduit($id_produit){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function rechercherListeProduit($nom_produit){
		$sql="SELECT * from produit where nom_produit=$nom_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function GetProduit($id){
$sql  = "select * from produit where id_produit =$id";
	$db = config::getConnexion();
	try{
		$produit = $db->query($sql); 
return $produit ;
	}
	catch(Exception $e){
 echo 'Erreur: '.$e->getMessage();
	}
}
}

?>