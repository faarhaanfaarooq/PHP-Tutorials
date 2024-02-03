<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
        //printing something in PHP
        echo "This Is using PHP";
        echo "<br>"; //creating new line

        //creating variable in PHP
        $var1 = 10;
        $var2 = 20;
        echo $var1+$var2;
        echo "<br>";

        //Operators in PHP
        //Arthmetic Operators
        $varA = 100;
        $varB = 250;
        echo "The value of varA + varB : ";
        echo $varA+$varB;
        echo "<br>";

        $varA = 100;
        $varB = 250;
        echo "The value of varA - varB : ";
        echo $varA-$varB;
        echo "<br>";

        $varA = 100;
        $varB = 250;
        echo "The value of varA * varB : ";
        echo $varA*$varB;
        echo "<br>";

        $varA = 100;
        $varB = 250;
        echo "The value of varA / varB : ";
        echo $varA/$varB;
        echo "<br>";

        //Assignment Operators
        $newVar =  $varA;
        echo "The value of newVar is : ";
        echo $newVar;
        echo "<br>";
        
        //Comparison Operators
        echo "The value of 2 == 4 is ";
        echo var_dump(2==4);
        echo "<br>";

        echo "The value of 2 == 4 is ";
        echo var_dump(2!=4);
        echo "<br>";

        echo "The value of 2 == 4 is ";
        echo var_dump(2>=4);
        echo "<br>";

        echo "The value of 2 == 4 is ";
        echo var_dump(2<=4);
        echo "<br>";

        //Data Types
        /* 
        (1) String
        (2) Integar
        (3) Float
        (4) Boolean
        */

        //String
        $string = "This is string";
        echo var_dump($string);
        echo "<br>";

        //Integar
        $int = 14;
        echo var_dump($int);
        echo "<br>";

        //Float
        $float = 5.6;
        echo var_dump($float);
        echo "<br>";

        //Boolean
        $bool = True;
        echo var_dump($bool);
        echo "<br>";




    ?>
    
</body>
</html>