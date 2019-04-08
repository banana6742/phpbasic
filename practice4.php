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
   
    class SampleClass
   {
     //プロパティの宣言
     public $var = 'MyClass class has initialized!';
   }
    
   //インスタンスの生成
   $sample = new SampleClass(); 
   echo $sample->var;
   echo "<br>";

   $num = array(11,-2,4,35,0,8,-9);

   sort($num);
   print_r($num);
   echo "<br>";

   class User {
    //    public $name;

       public function __construct($name) {
        $this->name = $name;
      }

       public function sayHi(){
           echo "Hello All, I am $this->name!";
       }
   }

   class AdminUser extends User{
       public function sayHello(){
           echo "hello from Admin!";
       }
   }

   $Scott = new User("Scott");
//    $bob = new User("Bob");

   echo $Scott->sayHi();
//    $bob->sayHi();
//    $Scott->sayHi();
    echo "<br>";

    $startdate = new DateTime("1981-11-03");
    $enddate = new DateTime("2013-09-04");
    $interval = $startdate->diff($enddate);
    echo "Difference : " . $interval->y. " years, " .$interval->m. "months, ".$interval->d. "days ";
   
   class factorial_of_a_number{
       protected $_n;
       public function __construct($n){
           if(!is_int($n)){
               throw new INvalidArgumentException('Not a number or missing argument');
           }
           $this->_n = $n;
       }
       public function result(){
           $factorial = 1;
           for($i = 1; $i <= $this->_n; $i++){
               $factorial *= $i;
           }
           return $factorial;
       }
   }

   $newfactorial = New factorial_of_a_number(5);
   echo $newfactorial->result();

//    $k=1;
//    for($i=0;$i<4;$i++){

//    }

    ?>
</body>
</html>
