<?php

namespace Inachis\Component\VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Inachis\Component\CoreBundle\Entity\User;

/**
 * Object for handling user owned items
 * @ORM\Entity
 * @ORM\Table
 */
class UserItem
{
    /**
     * @ORM\Column(type="string", unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @var string The unique identifier for the object
     */
    protected $id;
    /**
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumn(name="itemId", referencedColumnName="id")
     * @var string The UUID of the item owned by the user
     */
    protected $itemId;
    /**
     * @ORM\ManyToOne(targetEntity="Inachis\Component\CoreBundle\Entity\User", cascade={"detach"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @var string The unique identifier for the user that added this item
     */
    protected $user;
    /**
     * @ORM\Column(type="string", length=100)
     * @var string The condition that the user's item is in
     */
    protected $condition;
    /**
     * @ORM\Column(type="boolean")
     * @var bool Flag specifying whether the item is complete
     */
    protected $complete = false;
    /**
     * @ORM\Column(type="string", length=50)
     * @var string The grade given to the item by a grading authority (e.g. AFA)
     */
    protected $grade;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string Description of where the item is located
     */
    protected $location;
    /**
     * @ORM\Column(type="string", length=100)
     * @var string By whom the item is signed, if applicable
     */
    protected $signed;
    /**
     * @ORM\Column(type="decimal", scale=3)
     * @var float The price paid for a user's item 
     */
    protected $cost = 0.00;
    /**
     * @ORM\Column(type="decimal", scale=3)
     * @var float The current (known) value of a user's item 
     */
    protected $itemValue = 0.00;
    /**
     * @ORM\Column(type="text")
     * @var string Any notes relating the user's item
     */
    protected $notes;
    /**
     * @ORM\Column(type="datetime")
     * @var DateTime The date/time that the item was added
     */
    protected $createDate;
    /**
     * @ORM\Column(type="datetime")
     * @var DateTime The date/time that the item was modified
     */
    protected $modDate;
    /**
     * Default constructor
     * @param string $itemId The ID of the item
     * @param string $userId The owner of the item
     * @param string $condition The condition of the item
     * @param bool $complete The completeness of the item
     * @param string $grade The grade of the item
     * @param string $location The current location of the item
     * @param string $signed The person who has signed the item if applicable
     * @param float $cost The original cost of the item
     * @param float $itemValue The current value of the item
     * @param string $notes Any relevent notes for the item
     */
    public function __construct(
            $itemId = '', 
            $userId = '', 
            $condition = '', 
            $complete = false, 
            $grade = '', 
            $location = '', 
            $signed = '', 
            $cost = 0.00, 
            $itemValue = 0.00, 
            $notes = ''
    ) {
        $this->setItemId($itemId);
        $this->setUserId($userId);
        $this->setCondition($condition);
        $this->setComplete($complete);
        $this->setGrade($grade);
        $this->setLocation($signed);
        $this->setSigned($signed);
        $this->setCost($cost);
        $this->setItemValue($itemValue);
        $this->setNotes($notes);
        $this->setCreateDateFromDateTime(new \DateTime('now'));
        $this->setModDateFromDateTime(new \DateTime('now'));
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getItemId()
    {
        return $this->item_id;
    }
    
    public function getUserId()
    {
        return $this->user_id;
    }
    
    public function getCondition()
    {
        return $this->condition;
    }
    
    public function getComplete()
    {
        return (bool) $this->complete;
    }
    
    public function getGrade()
    {
        return $this->grade;
    }
    
    public function getLocation()
    {
        return $this->location;
    }
    
    public function getSigned()
    {
        return $this->signed;
    }
    
    public function getCost()
    {
        return (float) $this->cost;
    }
    
    public function getItemValue()
    {
        return (float) $this->item_value;
    }
    
    public function getNotes()
    {
        return $this->notes;
    }
    
    /**
     * Returns the value of {@link createDate}
     * @return string The creation date of the {@link Page}
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
    /**
     * Returns the value of {@link modDate}
     * @return string The date the {@link Page} was last modified
     */
    public function getModDate()
    {
        return $this->modDate;
    }
    
    public function setId($value)
    {
        $this->id = $value;
    }
    
    public function setItemId($value)
    {
        $this->item_id = $value;
    }
    
    public function setUserId($value)
    {
        $this->user_id = $value;
    }
    
    public function setCondition($value)
    {
        $this->condition = $value;
    }
    
    public function setComplete($value)
    {
        $this->complete = (bool) $value;
    }
    
    public function setGrade($value)
    {
        $this->grade = $value;
    }
    
    public function setLocation($value)
    {
        $this->location = $value;
    }
    
    public function setSigned($value)
    {
        $this->signed = $value;
    }
    
    public function setCost($value)
    {
        $this->cost = (float) $value;
    }
    
    public function setItemValue($value)
    {
        $this->item_value = (float) $value;
    }
    
    public function setNotes($value)
    {
        $this->notes = $value;
    }
    
    public function setAddedDate($value)
    {
        $this->added_date = $value;
    }
    /**
     * Sets the value of {@link createDate}
     * @param string $value The date the post was created
     */
    public function setCreateDate($value)
    {
        $this->createDate = $value;
    }
    /**
     * Sets the {@link createDate} from a DateTime object
     * @param \DateTime $value The date to be set
     */
    public function setCreateDateFromDateTime(\DateTime $value)
    {
        $this->setCreateDate($value->format('Y-m-d H:i:s'));
    }
    /**
     * Sets the value of {@link modDate}
     * @param string $value Specifies the mod date for the {@link Page}
     */
    public function setModDate($value)
    {
        $this->modDate = $value;
    }
    /**
     * Sets the {@link modDate} from a DateTime object
     * @param \DateTime $value The date to set
     */
    public function setModDateFromDateTime(\DateTime $value)
    {
        $this->setModDate($value->format('Y-m-d H:i:s'));
    }
}
