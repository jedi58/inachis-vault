<?php
/**
 * @group unit
 */
class ItemTest extends PHPUnit_Framework_TestCase
{
    protected $item;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {        
        $this->item = new Inachis\Vault\Item();
        //parent::__construct($name, $data, $dataName);
    }
   
    public function testValidYear()
    {
      $this->assertInternalType("int", $this->item->year);
    }
}
