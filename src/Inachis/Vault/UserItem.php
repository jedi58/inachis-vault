<?php

namespace Inachis\Vault;

/**
 * Object for handling user owned items
 * @Entity @Table
 */
class UserItem
{
    /**
     * @Id @Column(type="string", unique=true, nullable=false)
     * @GeneratedValue(strategy="UUID")
     * @var string The unique identifier for the object
     */
    protected $id;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The UUID of the item owned by the user
     */
    protected $item_id;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The UUID of the user the item belongs to
     */
    protected $user_id;
    /**
     * @Column(type="string", length=100)
     * @var string The condition that the user's item is in
     */
    protected $condition;
    /**
     * @Column(type="boolean")
     * @var bool Flag specifying whether the item is complete
     */
    protected $complete = false;
    /**
     * @Column(type="string", length=50)
     * @var string The grade given to the item by a grading authority (e.g. AFA)
     */
    protected $grade;
    /**
     * @Column(type="string", length=255)
     * @var string Description of where the item is located
     */
    protected $location;
    /**
     * @Column(type="string", length="100")
     * @var string By whom the item is signed, if applicable
     */
    protected $signed;
    /**
     * @Column(type="decimal", scale="3")
     * @var float The price paid for a user's item 
     */
    protected $cost = 0.00;
    /**
     * @Column(type="decimal", scale="3")
     * @var float The current (known) value of a user's item 
     */
    protected $item_value = 0.00;
    /**
     * @Column(type="text")
     * @var string Any notes relating the user's item
     */
    protected $notes;
    /**
     * @Column(type="datetime")
     * @var DateTime The date/time that the item was added
     */
    protected $added_date;
    /**
     * Default constructor
     * @param string $item_id The ID of the item
     * @param string $user_id The owner of the item
     * @param string $condition The condition of the item
     * @param bool $complete The completeness of the item
     * @param string $grade The grade of the item
     * @param string $location The current location of the item
     * @param string $signed The person who has signed the item if applicable
     * @param float $cost The original cost of the item
     * @param float $item_value The current value of the item
     * @param string $notes Any relevent notes for the item
     * @param string $added_date The date the item was added to the collection
     */
    public function __construct(
            string $item_id = '', 
            string $user_id = '', 
            string $condition = '', 
            bool $complete = false, 
            string $grade = '', 
            string $location = '', 
            string $signed = '', 
            float $cost = 0.00, 
            float $item_value = 0.00, 
            string $notes = '', 
            string $added_date = '') {
        $this->__set('item_id', $item_id);
        $this->__set('user_id', $user_id);
        $this->__set('condition', $condition);
        $this->__set('complete', $complete);
        $this->__set('grade', $grade);
        $this->__set('location', $location);
        $this->__set('signed', $signed);
        $this->__set('cost', $cost);
        $this->__set('item_value', $item_value);
        $this->__set('notes', $notes);
        $this->__set('added_value', $added_date);
    }
    
    public function __get($var) {
        switch ($var) {
            case 'id':
                return $this->getId();
            case 'item_id':
                return $this->getItemId();
            case 'user_id':
                return $this->getUserId();
            case 'condition':
                return $this->getCondition();
            case 'complete':
                return $this->getComplete();
            case 'grade':
                return $this->getGrade();
            case 'location':
                return $this->getLocation();
            case 'signed':
                return $this->getSigned();
            case 'cost':
                return $this->getCost();
            case 'item_value':
                return $this->getItemValue();
            case 'notes':
                return $this->getNotes();
            case 'added_date':
                return $this->getAddedDate();
            default:
                return parent::__get($var);
        }
    }
    
    public function getId() : string
    {
        return $this->id;
    }
    
    public function getItemId() : string
    {
        return $this->item_id;
    }
    
    public function getUserId() : string
    {
        return $this->user_id;
    }
    
    public function getCondition() :string
    {
        return $this->condition;
    }
    
    public function getComplete() : bool
    {
        return (bool) $this->complete;
    }
    
    public function getGrade() : string
    {
        return $this->grade;
    }
    
    public function getLocation() : string
    {
        return $this->location;
    }
    
    public function getSigned() : string
    {
        return $this->signed;
    }
    
    public function getCost() : float
    {
        return (float) $this->cost;
    }
    
    public function getItemValue() : float
    {
        return (float) $this->item_value;
    }
    
    public function getNotes() : string
    {
        return $this->notes;
    }
    
    public function getAddedDate() : string
    {
        return $this->added_date;
    }
    
    public function __set($var, $value)
    {
        switch ($var) {
            case 'id':
                $this->setId($value);
            case 'item_id':
                $this->setItemId($value);
            case 'user_id':
                $this->setUserId($value);
            case 'condition':
                $this->setCondition($value);
            case 'complete':
                $this->setComplete($value);
            case 'grade':
                $this->setGrade($value);
            case 'location':
                $this->setLocation($value);
            case 'signed':
                $this->setSigned($value);
            case 'cost':
                $this->setCost($value);
            case 'item_value':
                $this->setItemValue($value);
            case 'notes':
                $this->setNotes($value);
            case 'added_date':
                $this->setAddedDate($value);
            default:
                parent::__set($var, $value);
        }
    }
    
    public function setId(string $value)
    {
        $this->id = $value;
    }
    
    public function setItemId(string $value)
    {
        $this->item_id = $value;
    }
    
    public function setUserId(string $value)
    {
        $this->user_id = $value;
    }
    
    public function setCondition(string $value)
    {
        $this->condition = $value;
    }
    
    public function setComplete(bool $value)
    {
        $this->complete = (bool) $value;
    }
    
    public function setGrade(string $value)
    {
        $this->grade = $value;
    }
    
    public function setLocation(string $value)
    {
        $this->location = $value;
    }
    
    public function setSigned(string $value)
    {
        $this->signed = $value;
    }
    
    public function setCost(float $value)
    {
        $this->cost = (float) $value;
    }
    
    public function setItemValue(float $value)
    {
        $this->item_value = (float) $value;
    }
    
    public function setNotes(string $value)
    {
        $this->notes = $value;
    }
    
    public function setAddedDate(string $value)
    {
        $this->added_date = $value;
    }
}