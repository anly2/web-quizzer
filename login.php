<?php
session_start();

if (isset ($_REQUEST['login'])) {
   //check username and password
   $_SESSION['user'] = $_REQUEST['username'];
   header ("Location: index.php");
}


//$_GET['login']
//$_POST['username']
//$_REQUEST[...] - combines $_GET  and  $_POST
?>

<html>
<head>
   <title>Quizzer - Login</title>
   
   <link rel="stylesheet" type="text/css" href="master.css">
   
   <style type="text/css">
   </style>
</head>
<body>

<form class="login-form" action="?login=anything" method="POST">
   <label>
      <div class="label-text">Username:</div>
      <input type="text" name="username" placeholder="Username:" />
   </label>
   
   <label>
      <div class="label-text">Password:</div>
      <input type="password" name="password" placeholder="Password:" />
   </label>
   
   <br />
   
   <input type="submit" value="Submit" />
</form>

</body>
</html>