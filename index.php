<!DOCTYPE html>

<html>

  <head>

    <link href="css/styles.css" rel="stylesheet">

  </head>

  <body>

    <h1>My Website</h1>

    <p>This is my first website</p>

	<form action="" method="post">	  <input type="text" name="text"><br><input type="submit">

	</form>

	<?php

	header("Content-type: text/html; charset=utf-8");

	error_reporting(0);

	if($_POST["text"]!="")

	{

	file_put_contents("b.txt", $_POST["text"],FILE_APPEND);

	}

	

	echo @file_get_contents("b.txt");

	?>

	</form>

	

	<audio autoplay="" loop=""><source src="http://tbvideo.ixiaochuan.cn/zyad/0c/cb/a99c-b20c-11eb-a99f-00163e0e67b8" type="audio/mp3"/>

  </body>

</html>		
