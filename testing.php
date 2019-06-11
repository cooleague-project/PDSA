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
 * @test
 */

   /* public function TestinsertData(){

    //1-testing by send empty field to it
    $empty='';
                $this->assertEquals(1 , $this->obj->insertData(1));

    }*/

  /*   public function TestConnect(){
        //test with empty inputs (invalid)
       // $this->assertEquals(-1,$this->obj->connect("","","",""));
         //test with valid inputs
         $res=$this->obj->connect("localhost","root","","pdsa");
          $this->assertNull($res[0]);
        
     }*/
    
    public function testRandomcode()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMock('functions');

        // Configure the stub.
        $stub->expects($this->any())
             ->method('random')
             ->will($this->returnValue('2'));

        // Calling $stub
        $res=$stub->random();
        //$this->assertEquals('2', $res);
        $this->obj->attach($stub);

        //test case 1 
        $this->assertEquals('b2D',$this->obj->random_code('b h','D'));
    }

}

?>
