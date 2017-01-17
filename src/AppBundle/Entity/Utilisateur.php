<?php
namespace AppBundle\Entity;


use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $nom;
    
     /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $prenom;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
    }
    
    public function getPrenom(){
        return $this->prenom;
    }
    
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
}
