<?php
include 'init.php';

?>
<html>
<head>
</head>
<body>
<form method="post" action="index.php">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
       
       <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
      <br><a href="register.php">Register</a>
      <br><a href="logout.php">logout</a>
</body>


</html>