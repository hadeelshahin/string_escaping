<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
   echo "hello PHP";
   echo "<br>" , '=========================================================================' , "<br>";
   echo 'hello PHP';
   echo "<br>" , '=========================================================================' , "<br>";
   echo "hello 'php'";   //output :hello 'php'
   echo "<br>" , '=========================================================================' , "<br>";
   echo 'hello "PHP"';  //output: hello "PHP"
   echo "<br>" , '=========================================================================' , "<br>";
   # if i want a ' inside a ' without any warning or error so we have to use escaping so i have to use before it \ 
   echo "hello \" PHP , in this i used escaping "; 
   echo "<br>" , '=========================================================================' , "<br>";
   echo 'hello \'PHP\'';    
   echo "<br>" , '=========================================================================' , "<br>";
   # i want to output on multible lines 
   echo "hello
   PHP 
   on 
   multible 
   lines "; //will output all of them into one line 
   echo "<br>" , '=========================================================================' , "<br>";
   echo nl2br("hello
   PHP 
   on 
   multible 
   lines");
   
   #nl2br built in function =>stands for new line 2 <br> 
 
   #single concatenation:
   echo "<br>" , '=========================================================================' , "<br>";

   $firstName = "John";
   $lastName = "Doe";
   $fullName = $firstName . " " . $lastName;
   echo $fullName; // Output: John Doe

   echo "<br>" , '=========================================================================' , "<br>";
   #string interpolation :
   $name = "John";
echo "Hello, $name!"; // Output: Hello, John!

// For more complex expressions, use curly braces
$items = 5;
echo "You have {$items} items in your cart."; // Output: You have 5 items in your cart.
echo "<br>" , '=========================================================================' , "<br>";
echo "Hello {$name}";
echo "<br>" , '=========================================================================' , "<br>";
echo 'it\'s a great day ';

?>
    
</body>
</html>