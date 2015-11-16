<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" href="/hw/assets/css/bootstrap.css" type="text/css"/> 
  	<link rel="stylesheet" href="hw/assets/css/main.css" type="text/css">
   <link rel="stylesheet" href="hw/assets/css/next.css" type="text/css">
  <title>HW</title>
</head>
<body>
	<!-- formで$POSTに送る→$_POSTから引っ張ってくる -->
		<form action="" method="post">
			<input type="text" name="comment" /><br />
			<!-- <input type="submit" value="送信"/> -->
			<button type="submit" class="btn btn-default btn-lg">
		  	<span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Push
			</button>
		</form>
</body>
</html>

				<?php
					error_reporting(0);
					if(isset($_POST['comment'])){
					$comment = $_POST['comment'];
					$hello = "Hello!!" . $comment . "さん";
					htmlspecialchars($comment);
					echo $hello;
					}
				?>
				

