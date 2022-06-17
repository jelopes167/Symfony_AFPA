<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementRepository::class)]
class Equipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

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
    private $name;

    #[ORM\ManyToMany(targetEntity: Gite::class, mappedBy: 'equipements')]
    private $gites;

    public function __construct()
    {
        $this->gites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Gite>
     */
    public function getGites(): Collection
    {
        return $this->gites;
    }

    public function addGite(Gite $gite): self
    {
        if (!$this->gites->contains($gite)) {
            $this->gites[] = $gite;
            $gite->addEquipement($this);
        }

        return $this;
    }

    public function removeGite(Gite $gite): self
    {
        if ($this->gites->removeElement($gite)) {
            $gite->removeEquipement($this);
        }

        return $this;
    }
}
