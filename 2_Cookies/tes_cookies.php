<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (count($_COOKIE)>0){
			echo "Cookies enabled.";
		}else{
			echo "Cookies Disabled.";
		}
	?>
	<!-- Cookie pada browser dengan mode private tida dapat digunakan -->
</body>
</html>