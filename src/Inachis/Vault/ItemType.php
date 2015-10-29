<?php

namespace Inachis\Vault;

/**
 * Object for handling types that describe \Inachis\Vault\Item objects
 * @Entity @Table
 */
class ItemType
{
    /**
     * @Id @Column(type="string", unique=true, nullable=false)
     * @GeneratedValue(strategy="UUID")
     * @var string The unique identifier for the item range
     */
    protected $id;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The name of the type
     */
    protected $title;
    /**
     * @Column(type="text")
     * @var string The description of the type
     */
    protected $description;
    /**
     * @Column(type="string", length=255)
     * @var string The filename or URI to an image representing the range
     */
    protected $image_url;
    /**
     * 
     * @param type $title
     * @param type $description
     * @param type $image_url
     */
    public function __construct(
            $title = '',
            $description = '',
            $image_url = ''
    ) {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setImageUrl($image_url);
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
        return $this->image_url;
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
        $this->image_url = $value;
    }
}
