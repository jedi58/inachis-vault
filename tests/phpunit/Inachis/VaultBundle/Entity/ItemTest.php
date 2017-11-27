<?php
namespace Inachis\Tests\VaultBundle\Entity;

use Inachis\Component\VaultBundle\Entity\Item;
use Inachis\Component\VaultBundle\Entity\ItemRange;
use Inachis\Component\VaultBundle\Entity\ItemType;
use Inachis\Component\CoreBundle\Entity\User;

/**
 * @group unit
 */
class ItemTest extends \PHPUnit\Framework\TestCase
{
    protected $item;
    protected $properties = [];

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        $this->item = new Item();
        $this->properties = [
            'id' => 'UUID',
            'title' => 'Super rare item',
            'description' => 'You can\'t find this anywhere',
            'barcode' => '00010001001',
            'imageUrl' => 'UUID',
            'year' => 1985,
            'bom' => 0,
            'special' => 0,
            'variant' => new Item(
                'A similar item',
                'With a very different description',
                new ItemRange(
                    'Test',
                    'A test range',
                    1955,
                    2015
                )
            ),
            'createDate' => new \DateTime('yesterday noon'),
            'modDate' => new \DateTime('now'),
            'range' => new ItemRange(
                'Test',
                'A test range',
                1955,
                2015
            ),
            'type' => new ItemType(),
            'user' => new User()
        ];
    }

    private function initialiseDefaultObject()
    {
        $this->item->setId($this->properties['id']);
        $this->item->setTitle($this->properties['title']);
        $this->item->setDescription($this->properties['description']);
        $this->item->setRange($this->properties['range']);
        $this->item->setType($this->properties['type']);
        $this->item->setBarcode($this->properties['barcode']);
        $this->item->setImageUrl($this->properties['imageUrl']);
        $this->item->setYear($this->properties['year']);
        $this->item->setBom($this->properties['bom']);
        $this->item->setSpecial($this->properties['special']);
        $this->item->setVariant($this->properties['variant']);
        $this->item->setCreateDate($this->properties['createDate']);
        $this->item->setModDate($this->properties['modDate']);
        $this->item->setUser($this->properties['user']);
    }
   
    public function testSettingOfObjectProperties()
    {
        $this->initialiseDefaultObject();
        $this->assertEquals($this->properties['id'], $this->item->getId());
        $this->assertEquals($this->properties['title'], $this->item->getTitle());
        $this->assertEquals($this->properties['description'], $this->item->getDescription());
        $this->assertEquals($this->properties['barcode'], $this->item->getBarcode());
        $this->assertEquals($this->properties['imageUrl'], $this->item->getImageUrl());
        $this->assertEquals($this->properties['year'], $this->item->getYear());
        $this->assertEquals($this->properties['bom'], $this->item->getBom());
        $this->assertEquals($this->properties['special'], $this->item->getSpecial());
        $this->assertEquals($this->properties['variant'], $this->item->getVariant());
    }
}
