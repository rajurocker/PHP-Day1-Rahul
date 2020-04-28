<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body class="container bg-dark text-light">

    <div class="jumbotron mt-5">
      <h1 class="text-primary"> This is Rahul's PHP Webpage </h1>
      <br>
      <br>

      <h1 class="text-danger"> PHP is a server side scripting language </h1>
      <h2 class="text-primary"> PHP is executed on the server </h2>
      <h3 class="text-secondary"> Acronym is  Hypertext Preprocessor </h3>
      <h4 class="text-info"> Used in blog systems like facebook</h4>
      <h5 class="text-warning"> Uses file extension .php </h5>
      <h6 class="text-danger"> Requirements : MAMP or WAMP </h6>
    </div>

    <?php //beginning of php

    echo 'Learning PHP <br>'; #output statement
    print 'output using print keyword <br>'; // output statement

    echo '<h1 class="display-4  mt-5 text-primary"> Difference between echo and print</h1>';
    echo
    ' <ul> <li> echo has no return value while print has a return value of 1 so it can be used in expressions.</li>
    <li>echo can take multiple parameters (although such usage is rare) while print can take one argument.</li>
    <li>echo is marginally faster than print </li> </ul>';

    /* Multiple Line Comments
    1. PHP statements end with semicolon
    2. Key words are not case sensitive
    3. Variable names are case sensitive4.
    4. Variable names start with $
    */

    // constant
    echo '<h1 class="display-4  mt-5 text-primary"> Constants are globals</h1>';
    define("GREETING", "Welcome to W3Schools.com!", true); //case insensitive true
    echo greeting;

    // string
    echo '<h1 class="display-4  mt-5 text-primary"> String</h1>';
    $myName = 'Yoobee';
    var_dump($myName);
    echo '<br>';
    echo ' My name is ' , $myName;
    echo '<h1> My name is </h1>' . $myName .'<br>'; //concatenation operator

    echo ($myName. '<br>');
    print ($myName . '<br>');

    echo '<br>';
    echo strlen("Here is my string"); // Shows how many letters
    echo '<br>';
    echo str_word_count("Here is my string"); // Shows how many words
    echo '<br>';     
    echo strrev("Here is my string"); // Puts my words reverse
    echo '<br>';
    echo strpos("Here is my string", "my"); // This string finds where and what number category of 'my'
    echo '<br>';
    echo str_replace("Speed", "Cheese", "Need For Speed"); // replaces the word for you


    // Numbers
    echo '<h1 class="display-4 mt-5 text-primary"> Numbers</h1> ';

    echo '<br>'; 
    $x = 40;// Check if the type of a variable is integer
    var_dump(is_int($x));
    echo "<br>";
    $x = 4.0;// Check again...
    var_dump(is_int($x));


    echo '<br>';
    $x = 642;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "642";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "64.2" + 100;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "cheese";
    var_dump(is_numeric($x));




    // Boolean
    echo '<h1 class="display-4  mt-5 text-primary"> Boolean</h1>';

    $visible =true;
    var_dump($visible);
    echo '<br>';

    // integer

    echo '<h1 class="display-4  mt-5 text-primary"> Integer</h1>';
    $x = 5;
    var_dump($x);
    echo '<br>';


    // float
    echo '<h1 class="display-4  mt-5 text-primary"> Float</h1>';

    $y = 10.2;
    var_dump($y);
    echo '<br>';

    // arrays
    echo '<h1 class="display-4  mt-5 text-primary"> Array</h1>';

    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo '<br>';
    print_r($cars);
      echo '<br>';
      echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

      // loop
      echo '<h1 class="display-4  mt-5 text-primary"> Loop</h1>';

      for ($x = 0; $x <= 10; $x++) {
          echo "The number is: $x <br>";
      }

      //foreach Loop
      echo '<h1 class="display-4  mt-5 text-primary"> The foreach loop works only on arrays</h1>';
      $colors = array("red", "green", "blue", "yellow");
      foreach ($colors as $value) {
        echo "$value <br>";
      }

      //object
      echo '<h1 class="display-4  mt-5 text-primary"> Object</h1>';

      class Car {
          function Car() {
              $this->model = "VW";
          }
      }

      // create an object
      $myCar = new Car();

      // show object properties
      echo $myCar->model;


    // scope
    echo '<h1 class="display-4  mt-5 text-primary"> Scope</h1>';

    function myTest() {
        // global $x, $y;
        // $y = $x + $y;
        // echo $y;

        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        echo $GLOBALS['y'] ,'<br>';
    }

    myTest();

    // Super global variables
    /* predefined variables in PHP are "superglobals" and can be accessed in any scope
    $GLOBALS
    $_SERVER */
    echo '<h1 class="display-4  mt-5 text-primary"> Global variables</h1>';
    $x = 5;
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

    /*
    $_REQUEST

    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION */




    echo '<h1 class="display-4  mt-5 text-primary"> Post Method </h1>';

    ?> <!--end of php-->


    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>
    <?php
    // $_POST

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

  </body>
</html>
