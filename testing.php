<?php
 include ("functionsclass.php");

use PHPUnit\Framework\TestCase;

class functionsTest extends PHPUnit_Framework_TestCase
{
    
    public $obj;

    public function setUp()
    {
        $this->obj = new functions();
    }
    
   /**
 * @testdox
 */
    
    public function TestinsertAppointment(){
       // $obj2=new functions();
        
                $this->assertEquals(1 , $this->obj->insertAppointment(1));

    }
    
    
    
}

?>