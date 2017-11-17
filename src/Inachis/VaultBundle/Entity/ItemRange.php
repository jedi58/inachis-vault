<?php

namespace Inachis\Component\VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object for handling ranges that {@link Item} objects belong to
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(name="search_idx", columns={"title"})})
 */
class ItemRange
{
    /**
     * @ORM\Column(type="string", unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @var string The unique identifier for the item range
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @var string The name of the range
     */
    protected $title;
    /**
     * @ORM\Column(type="text")
     * @var string The description of the range
     */
    protected $description;
    /**
     * @ORM\Column(type="smallint")
     * @var int The starting year (e.g. 2015) for the range
     */
    protected $startYear;
    /**
     * @ORM\Column(type="smallint")
     * @var int The ending year (e.g. 2015) for the range
     */
    protected $endYear;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string The filename or URI to an image representing the range
     */
    protected $imageUrl;
    /**
     * Default constructor for Inachis\Vault\ItemRange entity
     * @param string $title
     * @param string $description
     * @param int $startYear
     * @param int $endYear
     * @param string $imageUrl
     */
    public function __construct(
            $title = '',
            $description = '',
            $startYear = 0,
            $endYear = 0,
            $imageUrl = ''
    ) {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setStartYear($startYear);
        $this->setEndYear($endYear);
        $this->setImageUrl($imageUrl);
    }
    public function getId()
    {
        return $this->id;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function getStartYear()
    {
        return (int) $this->startYear;
    }
    
    public function getEndYear()
    {
        return (int) $this->endYear;
    }
    
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    public function setId($value)
    {
        $this->id = $value;
    }
    
    public function setTitle($value)
    {
        $this->title = $value;
    }
    
    public function setDescription($value)
    {
        $this->description = $value;
    }
    
    public function setStartYear($value)
    {
        $this->startYear = (int) $value;
    }
    
    public function setEndYear($value)
    {
        $this->endYear = (int) $value;
    }
    
    public function setImageUrl($value)
    {
        $this->imageUrl = $value;
    }
}
