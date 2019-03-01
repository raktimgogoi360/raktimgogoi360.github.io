<?php

  session_start();
 

?>


<html>
<head>


	<title>Home Page</title>
</head>
<body>
<img src="images/freedom_11-wallpaper-1920x1080.jpg">
	<a href="logout.php">LOGOUT</a>
 <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>;
</body>
</html>