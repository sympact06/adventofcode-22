<!-- Advent Of Code 2022 by Olivier -->
<?php

/* $bestand = fopen("ja.txt", "r");
echo fread($bestand,filesize("ja.txt")); */
$cal_lijst = array();
$a;
if ($file = fopen("ja.txt", "r")) {
    while(!feof($file)) {
        $textperline = fgets($file);
        #echo $textperline;
        if (!is_numeric($textperline)) {
            $a++;
        } 
        else{
            $cal_lijst[$a]+= $textperline;
        }
      

     }
    fclose($file);
    echo $a;
    var_dump($cal_lijst);

    $maxcal; 

    foreach ($cal_lijst as $row){
        if ($row >= $maxcal){
            $maxcal = $row;
        }
    }
    echo $maxcal;
 }