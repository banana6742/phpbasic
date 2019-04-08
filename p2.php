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
        
    $var = 'PHP Tutorial';

    ?>
    <title><?php echo $var; ?></title>
    <h3><?php echo $var; ?></h3>
    <p>PHP, an acronym for Hypertext....</p>
    <p><a href="http://localhost/sample/practice-2.php">Go to the <?php echo $var; ?></a>.</p>
    <?php
    phpinfo();

    $d = 'A00';
    for($d; $d<'A06';$d++){
        echo $d;
    }
    echo "<br>";   

    $x = 16;
    echo sqrt($x);
    echo "<br>";

    // echo strpos("Hello world!", " ");
    // // echo str_word_count(echo substr("Hello world",echo strpos("Hello world!", " ");););
    // echo "<br>";


    echo "<a href=\"http://www.google.co.jp/\">Google</a>にリンクします。\n";
    // echo " <a href="https:www.google.com/">differentpage </a> ";
    echo "<br>";

    $num = 5;
    echo $num % 2 == 0 ? "even" : "odd";
    echo "<br>";
   
    ?>  
</body>
</html>