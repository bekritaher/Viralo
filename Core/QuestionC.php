<?PHP
//include "../config.php";
class QuestionC {
function AfficherQuestion($cat){
		echo "code_question : ".$cat->getCode_question()."<br>";
		echo "question : ".$cat->getQuestion()."<br>";
		echo "reponse : ".$cat->getReponse()."<br>";
	
	}
	/*function calculerSalaire($event){
		echo $event->getDescription() * $event->getDescription();
	}*/
	function AjouterQuestion($cat){
		$sql="insert into qr (code_question,question,reponse) values (:code_question,:question,:reponse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $code_question=$cat->getCode_question();
        $question=$cat->getQuestion();
        $reponse=$cat->getReponse();
       
		$req->bindValue(':code_question',$code_question);
		$req->bindValue(':question',$question);
		$req->bindValue(':reponse',$reponse);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function AfficherQuestions(){
		$sql="SElECT * From qr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerQuestion($code_question){
		$sql="DELETE FROM qr where code_question= :code_question";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code_question',$code_question);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function ModifierQuestion($cat,$code_question){
		$sql="UPDATE qr SET code_question=:code_question, question=:question,reponse=:reponse WHERE code_question=:code_question";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
	        $req=$db->prepare($sql);
	
        $code_question=$cat->getCode_question();
        $question=$cat->getQuestion();
        $reponse=$cat->getReponse();
       
        
		$datas = array(':code_questions'=>$code_questions, ':code_question'=>$code_question, ':question'=>$question,':reponse'=>$reponse);
		$req->bindValue(':code_questions',$code_questions);
		$req->bindValue(':code_question',$code_question);
		$req->bindValue(':question',$question);
		$req->bindValue(':reponse',$reponse);
	

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererQuestion($code_question){
		$sql="SELECT * from qr where code_question=$code_question";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeQuestion($question){
		$sql="SELECT * from qr where question=$question";
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