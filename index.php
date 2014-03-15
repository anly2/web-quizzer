<?php
session_start();

if (!isset($_SESSION['user']))
   header("Location: ".'login.php');
?>
<html>
<head>
   <title>Quizzer - Main</title>
   
   <link rel="stylesheet" type="text/css" href="master.css">
   
   <style type="text/css">
   </style>
</head>
<body>

<div id="main">
   <div class="puzzle-category" id="line-puzzles">
   <!-- Puzzles recommended for you based on your likes -->
      <div class="header"> Puzzles for you </div>
      
      <div class="puzzle">
         <a href="?puzzle=1">Facebook puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
      <div class="puzzle">
         <a href="?puzzle=2">Coca-cola puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
      <div class="puzzle">
         <a href="?puzzle=3">Pepsi puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
   </div>

   <div class="puzzle-category" id="friends-puzzles">
   <!--
      Challenges that friends have recommended for them or have solved
      BUT no repetitions with the other categories
   -->
      <div class="header"> Puzzles for your friends </div>
      
      <div class="puzzle">
         <a href="?puzzle=4">Instagram puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
      <div class="puzzle">
         <a href="?puzzle=5">Fanta puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
      <div class="puzzle">
         <a href="?puzzle=6">Sprite puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
   </div>
   
   <div class="puzzle-category" id="challenge-puzzles">
   <!-- Challenges that friends have directed at you -->
      <div class="header"> Challenges </div>
   
      <div class="puzzle">
         <a href="?puzzle=7">Evil Facebook puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
      <div class="puzzle">
         <a href="?puzzle=8">Evil Pepsi puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
      <div class="puzzle">
         <a href="?puzzle=9">Evil Cola puzzle<!--Generated name; may be "unbranded"--></a>
      </div>
   </div>
</div>

</body>
</html>