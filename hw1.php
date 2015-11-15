<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>HW</title>
</head>
<body>
	<!-- formで$POSTに送る→$_POSTから引っ張ってくる -->
	<form action="" method="post">
	<input type="text" name="comment" /><br />
	<input type="submit" value="送信"/>
	</form>
	Hello!!
	<?php
		if(isset($_POST['comment'])){
		$comment = $_POST['comment'];

		function hello($comment){
			return htmlspecialchars($comment);
		}
		}
		echo hello($comment);
	?>
	さん
</body>
</html>

