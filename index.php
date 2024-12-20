<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>php</title>
  
  <!--css link-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="container text-center my-4">

    <!-- Example-1 -->

    <?php
    echo "<h1>"."Hello World!"." "."My Name Is Srabonty Pondit Boby"."</h1>";
    echo "<h2>"."I'm a Wordpress Web Developer"."</h2>";
    echo "<h3>"."Currently Learning PHP"."</h3>";
    ?>

      <!-- Example-2-->

      <?php
      $name = "Srabonty";
      echo "<h1>"."Her name is"." ". "$name"."</h1";
      ?>

      <!-- Example-3 -->
      <br>

      <?php
      $a = 15;
      $b = "Srabonty";
      $c = 10.80;
      $d = [10,20,30];
      $e = true;
      $f = null;

      var_dump($a);
      var_dump($b);
      var_dump($c);
      var_dump($d);
      var_dump($e);
      var_dump($f);
      ?>

      <!-- Example-4 -->
      <br>

      <?php
      // global
      $Name = "Boby";

      function calling_name(){
        // local
        global $Name;
        echo "<h1>"."Her name is"." ". "$Name"."</h1";

      }
      calling_name();
      ?>

      <!-- Example-5 -->
      <br>

      <?php
      $number1 = 300;
      $number2 = 400;
      $number1 += $number2;

      echo $number1;
      ?>

      <!-- Example-6 -->
      <br>

      <?php
      $number1 = 500;
      $number2 = 800;
      if ($number1 == $number2) {
        echo "equal";
      }else {
        echo "not equal";
      }
      ?>

      <!-- Example-7 -->
      <br>

      <?php
      print "Hello!<br>";
      print "I want to learn PHP!";
      ?>

      <!-- Example-8 -->
      <br>

      <?php
      $x = 5;
      var_dump($x);

      $x = "Hello";
      var_dump($x);
      ?>

      <!-- Example-9 -->
      <br>

      <?php
      $a = 5;       
      $b = 5.34;    
      $c = "hello";
      $d = true;    
      $e = NULL;    

      $a = (string) $a;
      $b = (string) $b;
      $c = (string) $c;
      $d = (string) $d;
      $e = (string) $e;


      var_dump($a);
      var_dump($b);
      var_dump($c);
      var_dump($d);
      var_dump($e);
      ?>

      <!-- Example-10   -->
      <br>

      <?php
      $A = 5;       
      $B = 5.34;    
      $C = "20 kilometers"; 
      $D = "kilometers 20"; 
      $E = "hello"; 
      $F = true;    
      $G = NULL;

      $A = (int) $A;
      $B = (int) $B;
      $C = (int) $C;
      $D = (int) $D;
      $E = (int) $E;
      $F = (int) $F;
      $G = (int) $G;

      var_dump($A);
      var_dump($B);
      var_dump($C);
      var_dump($D);
      var_dump($E);
      var_dump($F);
      var_dump($G);

      ?>


      <!-- Example-11-->

      <?php
      echo(pi());
      ?>

      <!-- Example-12-->

      <?php
      echo(min(0, 150, 30, 20, -8, -200) . "<br>");
      echo(max(0, 150, 30, 20, -8, -200));
      ?>

      <!-- Example-13 -->

      <?php
      echo(rand());
      ?>

      <!-- Example-14-->
      <br>

      <?php
      echo(sqrt(64));
      ?>

      <!-- Example-15 -->
      <br>

      <?php
      $x = 2000;  
      $y = 500;

      echo $x - $y;
      ?>

      <!-- Example-16 -->
      <br>

      <?php
      $x = 100;  
      $y = 50;

      echo $x * $y;
      ?>

      <!-- Example-17 -->
      <br>

      <?php
      $x = 2000;  
      $y = 50;

      echo $x / $y;
      ?>

      <!-- Example-18-->
      <br>
      
      <?php
      $x = 3000;  
      $y = 50;

      echo $x % $y;
      ?>

      <!-- Example-19 -->
      <br>

      <?php
      function myMessage() {
        echo "Hello world!";
      }

      myMessage();
      ?>

      <!-- Example-20-->
      <br>

      <?php
      $cars = array("Volvo", "BMW", "Toyota","Tesla",);
      echo count($cars);
      ?>

      <!-- Example-21 -->
       <br>
      <?php
      $a = 1;
      while ($a < 5) {
        echo $a;
        $a++;
      }
      ?>

      <!-- Example-22-->
       <br>
      <?php
      $motorbike = array("Yamaha", "Pulser", "Honda",);
      echo count($motorbike);
      ?>


    </div>
    

 <!--script link-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>