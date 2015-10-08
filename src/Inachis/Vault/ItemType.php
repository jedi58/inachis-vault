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
            string $title = '',
            string $description = '',
            string $image_url = ''
    ) {
        $this->__set('title', $title);
        $this->__set('description', $description);
        $this->__set('image_url', $image_url);
    }
    /**
     * 
     * @param type $var
     * @return type
     */
    public function __get(string $var)
    {
        switch ($var) {
            case 'id':
                return $this->getId();
            case 'title':
                return $this->getTitle();
            case 'description':
                return $this->getDescription();
            case 'image_url':
                return $this->getImageUrl();
            default:
                return $this->__get($var);
        }
    }
    public function getId() : string
    {
        return $this->id;
    }
    
    public function getTitle() : string
    {
        return $this->title;
    }
    
    public function getDescription() : string
    {
        return $this->description;
    }
    
    public function getImageUrl() : string
    {
        return $this->image_url;
    }
    /**
     * 
     * @param type $var
     * @param type $value
     */
    public function __set(string $var, $value)
    {
        switch ($var) {
            case 'id':
                $this->setId($value);
            case 'title':
                $this->setTitle($value);
            case 'description':
                $this->setDescription($value);
            case 'image_url':
                $this->setImageUrl($value);
            default:
                $this->__set($var, $value);
        }        
    }
    
    public function setId(string $value)
    {
        $this->id = $value;
    }
    
    public function setTitle(string $value)
    {
        $this->title = $value;
    }
    
    public function setDescription(string $value)
    {
        $this->description = $value;
    }
    
    public function setImageUrl(string $value)
    {
        $this->image_url = $value;
    }
}
