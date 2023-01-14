<!doctype html>
<html>
		<?php
include('conn.php');
	
		if(isset($_GET['id2'])) {
		$id2 = mysqli_real_escape_string($conn, $_GET['id2']);
	}
	
// write query for specific course
	$sql = "SELECT * FROM coursetb WHERE id = $id2";
	
//make query and get results
	$result = mysqli_query($conn, $sql);
	
// feth the resulting rows as an array
	$course = mysqli_fetch_assoc($result);
	
	mysqli_free_result($result);
// close connection
	mysqli_close($conn);
?>
<head>
<meta charset="UTF-8">
<title>subjecttemp</title>
<link rel="stylesheet" type="text/css" href="Style2.css">
	</script>
</head>
<body style="background-color: ">
<?php include('header.php'); ?>
<!--the main section -->
	<!--top bar-->
	<div class="topbar">
	<div class="header" style="height:100%;">
		<h2 class="headtitle" style="text-align: left; margin: 20px; font-size: 50px;"><?php echo htmlspecialchars($course['Title']); ?></h2>
	</div>
			<div class="header" style="height:100%;">
		<h3><?php echo htmlspecialchars($course['author']); ?></h3>	
	</div>
	<div class="header" style="height:100%;">
		<h3><?php echo htmlspecialchars($course['time']); ?></h3>	
	</div>
	</div>
	<!-- bottem bar -->
		<div class="topbar">
		<div class="header" style="width:45%;">
		<h3><?php echo htmlspecialchars($course['level']); ?></h3>	
	</div>
	<div class="header" style="width:45%;">
		<h3><?php echo htmlspecialchars($course['cost']); ?></h3>	
	</div>
	</div>
	<hr>
	<div class="boxoflists">
	<div class="listof">
	<h5>Subjects you will learn...</h5>
	<ul class="dashed">
		<?php foreach(explode(',',$course['things learned']) as $why) { ?>
			<li><?php echo htmlspecialchars($why); ?></li>
		<?php } ?>
	</ul>
	</div>
	<div class="listof">
	<h5>Why learn this...</h5>
	<ul class="dashed">
		<?php foreach(explode(',',$course['why learn']) as $why) { ?>
			<li><?php echo htmlspecialchars($why); ?></li>
		<?php } ?>
	</ul>
	</div>
	</div>
	<hr>
	<div class="summary">
	<h3>Summary</h3>
	<p><?php echo htmlspecialchars($course['summary']); ?></p>
	</div>
	<div class="bottomflex">
	<div class=bflex>
		<h3><?php echo htmlspecialchars($course['major subject']); ?></h3></div>
	<div class='bflex'>
		<h3><?php echo htmlspecialchars($course['minor subject']); ?></h3></div></div>
<?php include('footer.php') ?>
</body>
</html>