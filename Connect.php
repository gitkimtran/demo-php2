<?php 
	$connect = "host=ec2-52-20-248-222.compute-1.amazonaws.com port=5432 dbname=d6rknhl9m7oe3a user=yjrvedphbhercv password=e82de0cee9665a7ed23c792aad268603e607d79ad214e9c1f65279b712679a1a";
	$dbconn = pg_connect($connect);
	if (isset($_POST['username']) {
		# code...
		$username = $_POST['username'];
	}

	if (isset($_POST['pass'])) {
		# code...
		$pass = $_POST['pass']);
	}

	$sql = "SELECT * FROM tblaccount where _user = '".$username."' and _pass = '".$pass."'";

	$result = pg_query($dbconn, $sql);
	$row = pg_num_rows($result);
	if ($row==1) {
		# code...
		echo "Login success";
	}
	else {
		# code...
		echo "Login failed";
	}
 ?>
