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
    private $civilite;
    
    /**
     * @ORM\Column(type="string",nullable=false)
     */
    private $estUneEntreprise;
    
     /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $nom;
    
     /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $prenom;
    
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $nomEntreprise;
    
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $telephoneEntreprise;
    
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $adresseEntreprise;
    
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $bpEntreprise;
    
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $villeEntreprise;
    
    
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $certifie;
    
        

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    public function getCivilite(){
        return $this->civilite;
    }
    
    public function setCivilite($civilite){
        $this->civilite=$civilite;
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
    
    public function getEstUneEntreprise(){
        return $this->estUneEntreprise;
    }
    
    public function setEstUneEntreprise($estUneEntreprise){
        $this->estUneEntreprise=$estUneEntreprise;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     * @return Utilisateur
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string 
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set telephoneEntreprise
     *
     * @param string $telephoneEntreprise
     * @return Utilisateur
     */
    public function setTelephoneEntreprise($telephoneEntreprise)
    {
        $this->telephoneEntreprise = $telephoneEntreprise;

        return $this;
    }

    /**
     * Get telephoneEntreprise
     *
     * @return string 
     */
    public function getTelephoneEntreprise()
    {
        return $this->telephoneEntreprise;
    }

    /**
     * Set adresseEntreprise
     *
     * @param string $adresseEntreprise
     * @return Utilisateur
     */
    public function setAdresseEntreprise($adresseEntreprise)
    {
        $this->adresseEntreprise = $adresseEntreprise;

        return $this;
    }

    /**
     * Get adresseEntreprise
     *
     * @return string 
     */
    public function getAdresseEntreprise()
    {
        return $this->adresseEntreprise;
    }

    /**
     * Set bpEntreprise
     *
     * @param string $bpEntreprise
     * @return Utilisateur
     */
    public function setBpEntreprise($bpEntreprise)
    {
        $this->bpEntreprise = $bpEntreprise;

        return $this;
    }

    /**
     * Get bpEntreprise
     *
     * @return string 
     */
    public function getBpEntreprise()
    {
        return $this->bpEntreprise;
    }

    /**
     * Set certifie
     *
     * @param string $certifie
     * @return Utilisateur
     */
    public function setCertifie($certifie)
    {
        $this->certifie = $certifie;

        return $this;
    }

    /**
     * Get certifie
     *
     * @return string 
     */
    public function getCertifie()
    {
        return $this->certifie;
    }

    /**
     * Set villeEntreprise
     *
     * @param string $villeEntreprise
     * @return Utilisateur
     */
    public function setVilleEntreprise($villeEntreprise)
    {
        $this->villeEntreprise = $villeEntreprise;

        return $this;
    }

    /**
     * Get villeEntreprise
     *
     * @return string 
     */
    public function getVilleEntreprise()
    {
        return $this->villeEntreprise;
    }
}
