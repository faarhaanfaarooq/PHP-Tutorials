<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: grey;
    margin: auto;
}
</style>
<body>
    <div class = "container">
        <h1>Welcome To The Club</h1>
        Your party status is here:
        <?php
        //Conditional Statement
        $age = 10;
        if($age > 18){
            echo "You can enter.";
        }
        else if($age == 15){
            echo "You can enter with your parents.";
        }
        else{
            echo "Sorry, you can not enter.";
        }
        //Arrays
        $languages = array("Python", "C++", "Java", "PHP");
        echo "<br>";
        echo "Example of Array: ";
        echo "<br>";
        echo count($languages);
        echo "<br>";
        echo $languages[0];
        echo "<br>";
        ?>
    </div>
</body>
</html>