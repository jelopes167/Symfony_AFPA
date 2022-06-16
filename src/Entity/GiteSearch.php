<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class GiteSearch 
{
/***
 * @var int|null
 *//**
     * @Assert\Range(
     *      min = 30,
     *      max = 300,
     *      notInRangeMessage = "You must be between {{ min }}cm and {{ max }}cm tall to enter",
     * )
     */
    /**
     * @Assert\NotBlank
     */
private  $minSurface;


/***
 * @var int|null
 *//**
     * @Assert\NotBlank
     */

private  $minChambres;


/***
 * @var int|null
 *//**
     * @Assert\NotBlank
     */


private   $minCouchage;




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
}
