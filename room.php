<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    file_put_contents("room.txt",file_get_contents('php://input'));
    exit;
}

   $str = file_get_contents("room.txt");
   $array = explode(',', $str);
   if($array[0] >= $array[1]){
       exit;
   }
   $array[0]++;
   $str = implode(',',$array);
   file_put_contents("room.txt",$str);

   echo $array[0];

   

