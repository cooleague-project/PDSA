<?php
 include ("functionsclass.php");

use PHPUnit\Framework\Assert;
class functionsTest extends PHPUnit_Framework_TestCase
{

    public $obj;

    public function setUp()
    {
        $this->obj = new functions();
    }

    /**
   * @test
   * @expectedException InvalidArgumentException
   */

    public function TestinsertData(){



          //1- testing numberic value
            $this->assertEquals(-1 , $this->obj->insertData(1));
            //2- testing invalid string
            $this->assertEquals(-1 , $this->obj->insertData('test me'));
            //3- test vaild sql query
	          $sql = "SELECT *
            FROM patient
            WHERE id = '1' ";
            $this->assertEquals(1 , $this->obj->insertData($sql));
             //4-testing by send empty field to it expected error
            $empty='';
               $this->assertTrue( $this->obj->insertData($empty));


}
        /**
       * @test
      * @expectedException InvalidArgumentException
      *
       *
     */

        public function TestretriveData(){


              //1- testing numberic value
                $this->assertEquals(-1 , $this->obj->retriveData(1));

                //2- testing invalid string
                $this->assertEquals(-1 , $this->obj->retriveData('test me'));
                //3- test vaild sql query
    	          $sql = "SELECT *
                FROM patient
                WHERE id = '1' ";
                $this->assertEquals(1 , $this->obj->retriveData($sql));

                $empty='';
                    $this->assertTrue( $this->obj->retriveData($empty));
                  //  throw new InvalidArgumentException('ttt',10);
        }

        /**
        * @test
        * 
        */
        public function Testconcate(){
          //1- test empty prramters
          $this->assertEquals(''.'-'.''.'-'.'' , $this->obj->concate('','',''));
          //2- test 1st paramter contain number
          $this->assertEquals('2'.'-'.''.'-'.'' , $this->obj->concate('2','',''));
          //3- test 2nd paramter conantin numbr
          $this->assertEquals(''.'-'.'2'.'-'.'' , $this->obj->concate('','2',''));
          //4-test 3rd paramter conantin number
          $this->assertEquals(''.'-'.''.'-'.'1669' , $this->obj->concate('','','1669'));
          //5- test the 1st and 2nd
          $this->assertEquals('2'.'-'.'5'.'-'.'' , $this->obj->concate('2','5',''));
          //6- test the 3 together
          $this->assertEquals('2'.'-'.'5'.'-'.'1669' , $this->obj->concate('2','5','1669'));


        }



}

?>
