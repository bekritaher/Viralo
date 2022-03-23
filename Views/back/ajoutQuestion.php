
<?PHP
include "../../config.php";
include "../../Entities/question.php";
include "../../Core/QuestionC.php";

if (isset($_POST['code_question']) and isset($_POST['question']) and isset($_POST['reponse'])) {
	
	
$question1=new Question($_POST['code_question'],$_POST['question'],$_POST['reponse']);


$question1C=new QuestionC();
$question1C->AjouterQuestion($question1);
header('Location: AfficherQuestion.php');	
}
else
{
	echo "vérifier les champs";
}
//*/

?>