<?PHP
include "../../Core/QuestionC.php";
include "../../config.php";
$questionC=new QuestionC();
if (isset($_POST["code_question"])){
	$questionC->supprimerQuestion($_POST["code_question"]);
	header('Location: AfficherQuestion.php');
}

?>