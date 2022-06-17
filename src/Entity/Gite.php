<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;


#[ORM\Entity(repositoryClass: GiteRepository::class)]
class Gite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
 
    private int $id;





    #[ORM\Column(type: 'string', length: 255)]
      /**
     * @Assert\NotBlank(message="La valeur ne peut pas être nulle")
     * @Assert\Length(
    *      min = 3,
    *      
    *      minMessage= "Le nom doit faire au moins {{ limit }} caractères",
    * 
    * )
    */
    private string $nom;


  


    #[ORM\Column(type: 'text')]
       /**
     * @Assert\NotBlank(message="La valeur ne peut pas être nulle")
     * @Assert\Length(
    *      min = 10,
    *      max = 255,
    *      minMessage= "La description doit faire au moins {{ limit }} caractères",
    *      maxMessage="La description ne peut pas faire plus de {{ limit }} caractères",
    * )
    */
    private string $descriptiion;





    #[ORM\Column(type: 'integer')]
   /**
     * @Assert\NotBlank(message="La valeur ne peut pas être nulle")
     * @Assert\Range(
    *      min = 30,
    *      max = 300,
    *      notInRangeMessage = "La surface doit être comprise entre {{ min }} et {{ max }}m² ",
    * )
    */
    private int $surface;    





    #[ORM\Column(type: 'integer')]
   /**
     * @Assert\NotBlank(message="La valeur ne peut pas être nulle")
      */
    private int $chambres;


    #[ORM\Column(type: 'integer')]
  /**
     * @Assert\NotBlank
     */
    private $couchage; 
 /**
     * @Assert\NotBlank(message="La valeur ne peut pas être nulle")
      */

    #[ORM\ManyToMany(targetEntity: Equipement::class, inversedBy: 'gites')]
    private $equipements;

    public function __construct()
    {
        $this->equipements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescriptiion(): ?string
    {
        return $this->descriptiion;
    }

    public function setDescriptiion(string $descriptiion): self
    {
        $this->descriptiion = $descriptiion;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getChambres(): ?int
    {
        return $this->chambres;
    }

    public function setChambres(int $chambres): self
    {
        $this->chambres = $chambres;

        return $this;
    }

    public function getCouchage(): ?int
    {
        return $this->couchage;
    }

    public function setCouchage(int $couchage): self
    {
        $this->couchage = $couchage;

        return $this;
    }

    /**
     * @return Collection<int, Equipement>
     */
    public function getEquipements(): Collection
    {
        return $this->equipements;
    }

    public function addEquipement(Equipement $equipement): self
    {
        if (!$this->equipements->contains($equipement)) {
            $this->equipements[] = $equipement;
        }

        return $this;
    }

    public function removeEquipement(Equipement $equipement): self
    {
        $this->equipements->removeElement($equipement);

        return $this;
    }
}
