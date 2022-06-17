<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class GiteSearch 
{
    /**
     * @Assert\NotBlank(message="La valeur ne peut pas être nulle")
     * @Assert\Range(
    *      min = 30,
    *      max = 300,
    *      notInRangeMessage = "La surface doit être comprise entre {{ min }}  et {{ max }} m² ",
    * )
* @var int|null
*/
private  $minSurface;


 /**
     * @Assert\NotBlank(message="La valeur ne peut pas être nulle")
     
* @var int|null
*/
private  $minChambres;



 /**
     * @Assert\NotBlank(message="La valeur ne peut pas être nulle")
     
* @var int|null
*/
private  $minCouchage;

/**
 * 
 *
 * @var ArrayCollection
 */
private $Equipement;

public function __construct()
{
    $this->Equipement = new ArrayCollection();
}


/**
 * Get the value of minSurface
 */ 
public function getMinSurface(): ?int
{
return $this->minSurface;
}

/**
 * Set the value of minSurface
 *
 * @return  self
 */ 
public function setMinSurface($minSurface)
{
$this->minSurface = $minSurface;

return $this;
}

/**
 * Get the value of minChambres
 */ 
public function getMinChambres(): ?int
{
return $this->minChambres;
}

/**
 * Set the value of minChambres
 *
 * @return  self
 */ 
public function setMinChambres($minChambres)
{
$this->minChambres = $minChambres;

return $this;
}

/**
 * Get the value of minCouchage
 */ 
public function getMinCouchage(): ?int
{
return $this->minCouchage;
}

/**
 * Set the value of minCouchage
 *
 * @return  self
 */ 
public function setMinCouchage($minCouchage)
{
$this->minCouchage = $minCouchage;

return $this;
}



/**
 * Get the value of Equipements
 *
 * @return  ArrayCollection
 */ 
public function getEquipements()
{
return $this->Equipement;
}

/**
 * Set the value of Equipements
 *
 * @param  ArrayCollection  $Equipements
 *
 * @return  self
 */ 
public function setEquipements(ArrayCollection $Equipements)
{
$this->Equipement = $Equipements;

return $this;
}
}
