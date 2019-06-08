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

    public function TestinsertData(){

    //1-testing by send empty field to it
    $empty='';
                $this->assertEquals(1 , $this->obj->insertData(1));

    }



}

?>
