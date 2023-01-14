<!doctype html>
<html>
			<?php
include('conn.php');
	
		// write query
	$sql1 = 'SELECT * FROM usertb';
	
//make query and get results
	$result1 = mysqli_query($conn, $sql1);
	
// feth the resulting rows as an array
	$user = mysqli_fetch_all($result1, MYSQLI_ASSOC);
	
	mysqli_free_result($result1);
	
	?>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Style2.css">
</head>

<body>
	<div class="footer">
	<?php foreach($user as $person) {
	?>
		<div class='column'><?php echo htmlspecialchars($person['Name']); ?></div>
	<?php } ?>
	</div>
</body>
</html>