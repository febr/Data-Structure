<?php

//Map path data
$map = array(
        array(0,1,1,0,0,0,0,0)
      , array(0,0,0,1,1,0,0,0)
      , array(0,0,0,0,0,1,1,0)
      , array(0,0,0,0,0,0,0,0)
      , array(0,0,0,0,0,0,0,0)
      , array(0,0,0,0,0,0,0,0)
      , array(0,0,0,0,0,0,0,1)
      , array(0,0,0,0,0,0,0,0)
  );

//Parent point
$parentArr = array();
array_push($parentArr, $map[0]);

//queue
$temp = array(0);

while(!empty($temp)) {
    //current parent point
    $parentArr = $temp;

    //clear queue
    $temp = array();

    //searching
    foreach($parentArr as $value){
        //print
        echo $value.'->';

        foreach($map[$value] as $keyV =>$valueV){
            if($valueV == 1) {
                array_push($temp, $keyV);
            }
        }
    }
    echo "\n";
}

?>
