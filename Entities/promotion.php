<?PHP
class Promotion{
	private $id;
	private $nom;
	private $img;
	private $pourc;
	function __construct($id,$nom,$img,$pourc)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->img=$img;
		$this->pourc=$pourc;
	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	
	function getImg(){
		return $this->img;
	}
	function getPourc(){
		return $this->pourc;
	}
	

	function setImg($img){
		 $this->img=$img;
	}

	function setId($id){
		 $this->id=$id;
	}
	function setNom($nom){
		 $this->nom=$nom;
	}
	function setPourc($pourc){
		 $this->pourc=$pourc;
	}
	

}
?>