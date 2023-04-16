<?php

class DataAndGrade {
    //<!-- ======= DateFunction ======= -->
    public function DateFunction($Date,$Month){
        $FullDate = "$Date-$Month-2023";
        // return $FullDate;
        if($Date != "" && $Month != ""  ){
            if($Month >= 1 && $Month <= 12){
                if($Month == 1 ||  $Month == 3 || $Month == 5 || $Month == 7 || $Month == 8 || $Month == 10 || $Month == 12 ){
                    if($Date >= 1 && $Date <= 31 ){
                        return $FullDate ;
                    }else{
                        include "../alert/date/alertInputdateErrorDay.php";
                    }
                }else if($Month == 4 || $Month == 6 || $Month == 9 || $Month == 11){
                    if($Date >= 1 && $Date <= 30 ){
                        return $FullDate;
                    }else{
                        include "../alert/date/alertInputdateErrorDay.php";
                    }
                }else{
                    if($Date >= 1 && $Date <= 28 ){
                        return $FullDate;
                    }else{
                        include "../alert/date/alertInputdateErrorDay.php";
                    }
                }
            }else{
                include "../alert/date/alertInputdateErrorMonth.php";
            }
             } else {
                return false;
             }

         }
         
          }
?>