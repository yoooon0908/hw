<?php
	function hello($comment){
		return 'Hello!!'.htmlspecialchars($comment);
	}

?>
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
	<?php
		if(isset($_POST['comment'])){
			echo hello($comment);
		}
	?>
	さん
</body>
</html>

