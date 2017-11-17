<?php

namespace Inachis\Component\VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object for handling Items
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(name="search_idx", columns={"title"})})
 */
class Item
{
    /**
     * @ORM\Column(type="string", unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @var string The unique identifier for the item
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @var string The descriptive title for the item
     */
    protected $title;
    /**
     * @ORM\Column(type="text")
     * @var string A verbose description of the item
     */
    protected $description;
    /**
     * @ORM\Column(type="string", length=3832)
     * @var string If the item has an applicable barcode it can be stored here
     */
    protected $barcode;
    /**
     * @ORM\Column(type="string", length=512)
     * @var string The filename and/or URI of the image to use for this item
     */
    protected $imageUrl;
    /**
     * @ORM\Column(type="smallint", length=4)
     * @var int A 4-digit representation of the year of manufacture/release
     */
    protected $year;
    /**
     * @ORM\Column(type="simple_array")
     * @var string A CSV list of items IDs that this item includes as part of it
     */
    protected $bom;
    /**
     * @ORM\Column(type="boolean")
     * @var bool Flag indicating if this is an exclusive or limited item
     */
    protected $special = false;
    /**
     * @ORM\Column(type="string", length=255)
     * @var type If ID of the item this is a variant of if applicable
     */
    protected $variant;
    /**
     * @ORM\Column(type="datetime")
     * @var DateTime The date/time that the item was added
     */
    protected $createDate;
    /**
     * @ORM\Column(type="datetime")
     * @var DateTime The date/time that the item was last modified
     */
    protected $modDate;
    /**
     * @ORM\ManyToOne(targetEntity="Inachis\Component\VaultBundle\Entity\ItemRange", cascade={"detach"})
     * @ORM\JoinColumn(name="range_id", referencedColumnName="id")
     * @var string The unique identifier for the range this item belongs in
     */
    protected $range;
    /**
     * @ORM\ManyToOne(targetEntity="Inachis\Component\VaultBundle\Entity\ItemType", cascade={"detach"})
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * @var string The unique identifier for the type of item this is
     */
    protected $type;
    /**
     * @ORM\ManyToOne(targetEntity="Inachis\Component\CoreBundle\Entity\User", cascade={"detach"})
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * @var string The unique identifier for the user that added this item
     */
    protected $user;
    /**
     * Default constructor for Inachis\Vault\Item entity
     * @param string $title The title of the item
     * @param string $description The description for the item
     * @param string $range The UUID of the range the item is in
     * @param string $type The UUID of the type of item it is
     * @param string $user The UUID of the user creating the record
     */
    public function __construct (
            $title = '',
            $description = '',
            $range = null,
            $type = null,
            $user = null
    ) {
        $this->setTitle($title);
        $this->setDescription($description);
        $currentTime = new \DateTime('now');
        $this->setCreateDate($currentTime);
        $this->setModDate($currentTime);
        $this->setRange($range);
        $this->setType($type);
        $this->setUser($user);
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
        return (bool) $this->special;
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
    
    public function getRange()
    {
        return $this->range;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getUser()
    {
        return $this->user;
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
        if ($this->range->getId() > 0 &&
            $this->year < $this->range->getStartYear() ||
            $this->year > $this->range->getEndYear()
        ) {
            throw new \Exception(sprintf('Year \'%i\' is out of bounds for the selected range', $value));
        }
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
    
    public function setRange(ItemRange $value)
    {
        $this->range = $value;
    }
    
    public function setType(ItemType $value)
    {
        $this->type = $value;
    }
    
    public function setUser(User $value)
    {
        $this->user = $value;
    }
}
