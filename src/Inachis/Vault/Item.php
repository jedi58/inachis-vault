<?php

namespace Inachis\Vault;

/**
 * Object for handling Items
 * @Entity @Table
 */
class Item
{
    /**
     * @Id @Column(type="string", unique=true, nullable=false)
     * @GeneratedValue(strategy="UUID")
     * @var string The unique identifier for the item
     */
    protected $id;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The descriptive title for the item
     */
    protected $title;
    /**
     * @Column(type="text")
     * @var string A verbose description of the item
     */
    protected $description;
    /**
     * @Column(type="string", length=3832)
     * @var string If the item has an applicable barcode it can be stored here
     */
    protected $barcode;
    /**
     * @Column(type="string", length=512)
     * @var string The filename and/or URI of the image to use for this item
     */
    protected $imageUrl;
    /**
     * @Column(type="smallint", length=4)
     * @var int A 4-digit representation of the year of manufacture/release
     */
    protected $year;
    /**
     * @Column(type="simple_array")
     * @var string A CSV list of items IDs that this item includes as part of it
     */
    protected $bom;
    /**
     * @Column(type="boolean")
     * @var bool Flag indicating if this is an exclusive or limited item
     */
    protected $special = false;
    /**
     * @Column(type="string", length=255)
     * @var type If ID of the item this is a variant of if applicable
     */
    protected $variant;
    /**
     * @Column(type="DateTime")
     * @var DateTime The date/time that the item was added
     */
    protected $createDate;
    /**
     * @Column(type="DateTime")
     * @var DateTime The date/time that the item was last modified
     */
    protected $modDate;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The unique identifier for the range this item belongs in
     */
    protected $rangeId;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The unique identifier for the type of item this is
     */
    protected $typeId;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The unique identifier for the user that added this item
     */
    protected $userId;
    /**
     * Default constructor for Inachis\Vault\Item entity
     * @param string $title The title of the item
     * @param string $description The description for the item
     * @param string $range_id The UUID of the range the item is in
     * @param string $type_id The UUID of the type of item it is
     */
    public function __construct(
            $title = '',
            $description = '',
            $rangeId = '',
            $typeId = '',
            $userId = ''
    ) {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setCreateDate(new \DateTime('now'));
        $this->setModDate(new \DateTime('now'));
        $this->setRangeId($rangeId);
        $this->setTypeId($typeId);
        $this->setUserId($userId);
    }
    /**
     * Returns the UUID of the object
     * @return int The UUID of the Inachis\Vault\Item
     */
    public function getId()
    {
        return (int) $this->id;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function getBarcode()
    {
        return $this->barcode;
    }
    
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    
    public function getYear()
    {
        return (int) $this->year;
    }
    
    public function getBom()
    {
        return $this->bom;
    }
    
    public function getSpecial()
    {
        return (bool) $this->getSpecial;
    }
    
    public function getVariant()
    {
        return $this->variant;
    }
    
    public function getCreateDate()
    {
        return $this->createDate;
    }
    
    public function getModDate()
    {
        return $this->modDate;
    }
    
    public function getRangeId()
    {
        return $this->rangeId;
    }
    
    public function getTypeId()
    {
        return $this->typeId;
    }
    
    public function getUserId()
    {
        return $this->userId;
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
    
    public function setBarcode($value)
    {
        $this->barcode = $value;
    }
    
    public function setImageUrl($value)
    {
        $this->imageUrl = $value;
    }
    
    public function setYear($value)
    {
        $this->year = $value > 0 ? (int) $value : null;
    }
    
    public function setBom($value)
    {
        $this->bom = $value;
    }
    
    public function setSpecial($value)
    {
        $this->special = (bool) $value;
    }
    
    public function setVariant($value)
    {
        $this->variant = $value;
    }
    
    public function setCreateDate($value)
    {
        $this->createDate = $value;
    }
    
    public function setModDate($value)
    {
        $this->modDate = $value;
    }
    
    public function setRangeId($value)
    {
        $this->rangeId = $value;
    }
    
    public function setTypeId($value)
    {
        $this->typeId = $value;
    }
    
    public function setUserId($value)
    {
        $this->userId = $value;
    }
}
