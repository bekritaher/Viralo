<?PHP
class Question{
	private $code_question;
	private $question;
	private $reponse;
	function __construct($code_question,$question,$reponse)
	{
		$this->code_question=$code_question;
		$this->question=$question;
		$this->reponse=$reponse;
	}
	function getCode_question(){
		return $this->code_question;
	}
	function getQuestion(){
		return $this->question;
	}
	
	function getReponse(){
		return $this->reponse;
	}
	

	function setCode_question($code_question){
		 $this->code_question=$code_question;
	}

	function setQuestion($question){
		 $this->question=$question;
	}
		function setReponse($reponse){
		 $this->reponse=$reponse;
	}
	
}
?>