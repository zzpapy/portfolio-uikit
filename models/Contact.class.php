<?php 

class Contact
{
	
	// Propriétés
	private $id;
	private $nom ;
    private $prenom;
    private $mail;
    private $tel;
    private $mess;
	private $date;
	
	
	public function __construct($db)
		{
			$this->db = $db;
		}

	// Méthodes
	// Liste des getters
	
	public function getId()
	{
		return $this->id;
	}
    public function getNom()
    {
        return $this->nom;
    }	
    public function getPrenom()
    {
        return $this->prenom;
    }	
    public function getMail()
    {
        return $this->mail;
    }	
    public function getTel()
    {
        return $this->tel;
    }	
    public function getMess()
    {
        return $this->mess;
    }
	public function getDate()
	{
		return $this->date;
	}
	
	

	// Liste des setters
	
	
    
	public function setNom($nom)
	{
        
        $this->nom = $nom;
    
    }
    public function setPrenom($prenom)
    {
        $this->prenom= $prenom;		
    }
    public function setMail($mail)
	{
        
        $this->mail = $mail;
    }
    public function setTel($tel)
	{
        
        $this->tel = $tel;
    }
    public function setMess($mess)
	{
        
        $this->mess = $mess;
	}
    public function setDate($date)
    {
        
            $this->date = $date;
    }
	
	


	
}
 ?>