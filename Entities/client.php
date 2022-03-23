<?PHP
class Client{
	private $id;
	private $nom;
	private $prenom;
	private $adresse;
	function __construct($id,$nom,$prenom,$adresse)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
	}
	function getId()
	{
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	
	function getPrenom(){
		return $this->prenom;
	}	
	function getAdresse(){
		return $this->adresse;
	}
	

	function setId($id){
		 $this->id=$id;
	}

	function setNom($nom){
		 $this->nom=$nom;
	}
	function setPrenom($prenom)
	{
		 $this->prenom=$prenom;
	}
	function setAdresse($adresse)
	{
		 $this->adresse=$adresse;
	}
	
}
?>