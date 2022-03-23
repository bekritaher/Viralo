<?PHP
include "../../config.php";
class CompteC {
function AfficherClient($cat){
		echo "id : ".$cat->getId()."<br>";
		echo "nom : ".$cat->getNom()."<br>";
		echo "prenom : ".$cat->getPrenom()."<br>";
		echo "adresse : ".$cat->getAdresse()."<br>";
	
	}
	/*function calculerSalaire($event){
		echo $event->getDescription() * $event->getDescription();
	}*/
	function AjouterClient($cat)
	{
		$sql="insert into Compte (id,username,mdp,adresse,role) values (:id,:username,:mdp,:adresse,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	// to change
        $id=$cat->getId();
        $nom=$cat->getNom();
        $prenom=$cat->getPrenom();
        $adresse=$cat->getAdresse();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function AfficherCompte(){
		$sql="SElECT * From Compte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($id){
		$sql="DELETE FROM client where id= :id";
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
	function ModifierClient($cat,$code_question){
		$sql="UPDATE client SET id=:id, nom=:nom,prenom=:prenom adresse=:adresse WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
	        $req=$db->prepare($sql);
        $id=$cat->getId();
        $nom=$cat->getNom();
        $prenom=$cat->getPrenom();
        $adresse=$cat->getAdresse();
       
       
        
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom, ':adresse'=>$adresse,);
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererClient($id){
		$sql="SELECT * from client where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeClient($nom){
		$sql="SELECT * from client where nom=$nom";
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