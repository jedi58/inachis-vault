<?php

namespace Inachis\Vault;

/**
 * Object for handling ranges that \Inachis\Vault\Item objects belong to
 * @Entity @Table
 */
class ItemRange
{
    /**
     * @Id @Column(type="string", unique=true, nullable=false)
     * @GeneratedValue(strategy="UUID")
     * @var string The unique identifier for the item range
     */
    protected $id;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The name of the range
     */
    protected $title;
    /**
     * @Column(type="text")
     * @var string The description of the range
     */
    protected $description;
    /**
     * @Column(type="smallint")
     * @var int The starting year (e.g. 2015) for the range
     */
    protected $start_year;
    /**
     * @Column(type="smallint")
     * @var int The ending year (e.g. 2015) for the range
     */
    protected $end_year;
    /**
     * @Column(type="string", length=255)
     * @var string The filename or URI to an image representing the range
     */
    protected $image_url;
    /**
     * 
     * @param type $title
     * @param type $description
     * @param type $start_year
     * @param type $end_year
     * @param type $image_url
     */
    public function __construct(
            $title = '',
            $description = '',
            $start_year = 0,
            $end_year = 0,
            $image_url = ''
    ) {
        $this->__set('title', $title);
        $this->__set('description', $description);
        $this->__set('start_year', $start_year);
        $this->__set('end_year', $end_year);
        $this->__set('image_url', $image_url);
    }
    /**
     * 
     * @param type $var
     * @return type
     */
    public function __get($var)
    {
        switch ($var) {
            case 'id':
                return $this->getId();
            case 'title':
                return $this->getTitle();
            case 'description':
                return $this->getDescription();
            case 'start_year':
                return $this->getStartYear();
            case 'end_year':
                return $this->getEndYear();
            case 'image_url':
                return $this->getImageUrl();
            default:
                return $this->__get($var);
        }
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
        return (int) $this->start_year;
    }
    
    public function getEndYear()
    {
        return (int) $this->end_year;
    }
    
    public function getImageUrl()
    {
        return $this->image_url;
    }
    /**
     * 
     * @param type $var
     * @param type $value
     */
    public function __set($var, $value)
    {
        switch ($var) {
            case 'id':
                $this->setId($value);
            case 'title':
                $this->setTitle($value);
            case 'description':
                $this->setDescription($value);
            case 'start_year':
                $this->setStartYear($value);
            case 'end_year':
                $this->setEndYear($value);
            case 'image_url':
                $this->setImageUrl($value);
            default:
                $this->__set($var, $value);
        }        
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
        $this->start_year = (int) $value;
    }
    
    public function setEndYear($value)
    {
        $this->end_year = (int) $value;
    }
    
    public function setImageUrl($value)
    {
        $this->image_url = $value;
    }
}
