<?php declare(strict_types=1);
include "Function.php";
use PHPUnit\Framework\TestCase;
class FunctionTestDate extends TestCase {

    //<!-- ======= DateFunctionTC ======= -->
    public function testDayc01(){
        $obj = new DataAndGrade();
        $this->assertEquals(true,$obj->DateFunction("15","03"));       
        $this->assertEquals(false,$obj->DateFunction("29","02"));        
        $this->assertEquals(false,$obj->DateFunction("32","12"));    
        $this->assertEquals(false,$obj->DateFunction("32","20"));          
    }

}

?> 