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

    $count = 45;

    $sum = 0;

    for($i =1; $i <10 ; $i++){
        $sum =  $sum + $i;
    }
      echo $sum;

    if($count>$sum){
        
    }else{
        $count = $count - $i;
    }
    ($count>=0);
    echo "<br>";

    $fac = 1;
    for($j =1; $j <=4 ; $j++){
        $fac = $fac * $j;
    }
        echo "factorial of  is = .$fac.";
        echo "<br>";

        function normal($max) {
            // $primeLists = array();
            for ($i=2; $i<=$max; $i++) {
                $isPrime = true;
                for ($k=2; $k<$i; $k++) {
                    if ($i % $k === 0) {
                        $isPrime = false;
                        break;
                    }
                }
                if ($isPrime) {
                    $primeLists[] = $i;
                }
            }   
            return $primeLists;
        }
        print_r(normal(100));

        $n = 5;
        for($i =2; $i < $n ; $i++){
            if($n% $i ==0 ){
                echo "$n.は素数ではありません。";
                break;
            }else
            echo "$n.は素数です。";
        }


        // $table = array("zero"="0","one"="1","two"="2","three"="3","four"="4","five"="5","six"="6","seven"="7","eight"="8","nine"="9");
        // $num = 'zero';'three';'five';'six';'eight';'one';
        // $string = str_replace(array_keys($table),array_values($table),$num);
        // echo $num;
        echo "<br>"; 
        $n = 100;
        if($n <= 10){
            echo "$n  is smaller than or equal to 10";
        }elseif($n <20){
            echo "$n is greater than 10 but, smaller than or equal to 20";
        }elseif($n <30){
            echo "$n is greater than 20 but smaller than or equal to  30";
        }else{
            echo "$n  is greater than 30";
        }
        echo "<br>"; 

        $a = 4;
        $b = 6;

        echo "変換前：a =$a ,b = $b";
        echo "<br>";    
        $x = $a;
        $y = $b;

        $a = $y;
        $b = $x;

        echo "変換後：a =$a ,b = $b";
                echo "<br>"; 

            
        $a = "PHP";
        $b = "PYTHON";

        echo "$a is popular than $b";
        echo "<br>";    
        $x = $a;
        $y = $b;

        $a = $y;
        $b = $x;

        echo "$a is popular than $b";
        echo "<br>"; 


        $z = 81;
        $Z = sqrt($z);
        if($z>0){
        echo "$z is power of $Z";
        }

//         boolean f;
// for($i = 2; $i <= 100; $i++){
//     f = true;
//     for($j = 2;$j < $i/2 ; $j++){
//         if($i % $j == 0){
//         f = false;
//         break;
//         }
//     }
//     if(f){
//         echo "$i ";
// }
    
echo "<br>";
$numbers = 'zero;three;five;six;eight;one';
 
//指定した文字列が一致したら置き換える
$replace = str_replace('zero;three;five;six;eight;one', '035681',  $numbers);
 
echo $replace;    
    
echo "<br>";
 



// $num1 = "zero";
// $num2 = "three";
// $num3 = "five";
// $num4 = "six";
// $num5 = "eight";
// $num6 = "one";

// for($i=1;$i<=6;$i++){
// switch($num+$i){
//     case "zero";
//         echo 0;
//         break;
//     case "one";
//         echo 1;
//         break;
//     case "two";
//         echo 2;
//         break;
//     case "three";
//         echo 3;
//         break;
//     case "four";
//         echo 4;
//         break;
//     case "five";
//         echo 5;
//         break;
//     case "six";
//         echo 6;
//         break;
//     case "seven";
//         echo 7;
//         break;
//     case "eight";
//         echo 8;
//         break;
//     case "nine";
//         echo 9;
//         break;
// }}


    ?>
</body>
</html>

