<?php

namespace Inachis\Component\VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object for handling types that describe {@link Item} objects
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(name="search_idx", columns={"title"})})
 */
class ItemType
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
     * @var string The name of the type
     */
    protected $title;
    /**
     * @ORM\Column(type="text")
     * @var string The description of the type
     */
    protected $description;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string The filename or URI to an image representing the range
     */
    protected $imageUrl;
    /**
     * 
     * @param type $title
     * @param type $description
     * @param type $imageUrl
     */
    public function __construct(
            $title = '',
            $description = '',
            $imageUrl = ''
    ) {
        $this->setTitle($title);
        $this->setDescription($description);
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
    
    public function setImageUrl($value)
    {
        $this->imageUrl = $value;
    }
}
