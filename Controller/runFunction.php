<?php
        
        $Date = $_GET['Date'];
        $Month = $_GET['Month'];
        $d_array = array(
        "Sunday" => "วันอาทิตย์",
        "Monday" => "วันจันทร์",
        "Tuesday" => "วันอังคาร",
        "Wednesday" => "วันพุธ",
        "Thursday" => "วันพฤหัสบดี",
        "Friday" => "วันศุกร์",
        "Saturday" => "วันเสาร์"
        );

        include_once '../model/Function.php';
        $obj = new DataAndGrade();
        $rs = $obj->DateFunction($Date,$Month); 
        include "../view/showHomepage.php";

?>