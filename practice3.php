<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $color = array('white','green','red','blue','black');
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment:<br>";
    echo "the $color[2] carpet, the $color[1], the $color[0] housel, the leaden sky.<br>";
    echo "The new president and his first lady.- Richard M. Nixon";
    echo "<br>";

    $color = array(4 => 'white', 6 =>'green', 11 => 'red');
    echo $color[4];

    echo "<br>";

    $ceu = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg","Belgium"=>"Brussels","Denmark"=>"Copenhagen","Finland"=>"Helsinki",
    "France"=>"Paris","Slovenia"=>"Ljubljana","Germany"=>"Berlin","Greece"=>"Athens","Ireland"=>"Dublin","Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon","Spain"=>"Madrid","Sweden"=>"Stockholm","UK"=>"London","Cyprus"=>"Nicosia","Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague","Estonia"=>"Riga","Malta"=>"Valetta","Austria"=>"Vienna","Poland"=>"Warsaw");
    $arraylength = count($ceu);

    // foreach($ceu as $item =>$desc){
    // // ($x=0; $x<$arraylength; $x++){
    //     // echo $ceu[$x];
    //     echo "Country: ".$item." "."Capital: ".$desc."<br>";
    //     echo "<br>";
    // // }
    // foreach($ceu as $item => $desc){
    //     echo "<strong>Country</strong>: ".$item." "."<strong>Capital</strong>: ".$desc."<br>";
    // }


    foreach($ceu as $item => $desc){
        echo "The Capital of " .$item. " is ".$desc."<br>"; 
    }
    while(list($item,$desc)=each($ceu)){
        echo "$item: $desc<br>";    
    }
            
    // ksort($ceu);
    // echo "<pre>";
    // print_r($ceu);
    // echo "</pre>"; 
    asort($ceu);
    while(list($item,$desc)=each($ceu)){
        echo "The capital of ".$item. " is " .$desc. "<br>";    
    }
    arsort($ceu);

    foreach($ceu as $item => $desc){
        echo "The capital of ".$item. " is " .$desc. "<br>";
    }

    $assoarray = array("Sophia" => "31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

    asort($assoarray);
    echo "<pre>";
    print_r($assoarray);
    echo "</pre>";
    echo "<br>";

    ksort($assoarray);
    echo "<pre>";
    print_r($assoarray);
    echo "</pre>";
    echo "<br>";

    arsort($assoarray);
    echo "<pre>";
    print_r($assoarray);
    echo "</pre>";
    echo "<br>";
    krsort($assoarray);
    echo "<pre>";
    print_r($assoarray);
    echo "</pre>";
    echo "<br>";

    $symbol = "*";

    for($i=0;$i<6;$i++){
        echo "<br>";
        for($j=0;$j<$i;$j++){
            echo $symbol;
        }
    }
    echo "<br>";
    echo "<br>";
    for($i=0;$i<6;$i++){
        echo "<br>";
        for($j=5;$j>$i;$j--)
        echo $symbol;
    }
    echo "<br>";

    $num = 0;
    for($i=0;$i<5;$i++){
        echo "<br>";
        for($j=0;$j<$i;$j++){
            echo $num = $num + 1;
        }
    }
    echo "<br>";

    $num = 5;
    for($i=0;$i<6;$i++){
            echo "<br>";
        for($j=5;$j>$i;$j--){
               echo " $num ";
        } $num = $num - 1;
    }

    for($i=0;$i<6 ;$i++){
        echo "<br>";
        for($j=5;$j>$i;$j--){
            echo " $symbol";
        } 
    }
    echo "<br>";

    

    
    ?>
</body>
</html>
