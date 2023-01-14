<!doctype html>
<html>
	<?php
include('conn.php');
	
// write query for courses in minor
	$sql = 'SELECT * FROM coursetb';
	
//make query and get results 
	$result = mysqli_query($conn, $sql);
	
// feth the resulting rows as an array
	$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	mysqli_free_result($result);
	
	if(isset($_GET['id1'])) {
		$id1 = mysqli_real_escape_string($conn, $_GET['id1']);
	}
		// write query for specif minor
	$sql2 = "SELECT * FROM minortb WHERE id = $id1";
	
//make query and get results
	$result2 = mysqli_query($conn, $sql2);
	
// feth the resulting rows as an array
	$minor = mysqli_fetch_assoc($result2);
	
	mysqli_free_result($result2);
	
	
// close connection
	mysqli_close($conn);
?>
<head>
<meta charset="UTF-8">
<title>minortemp</title>
<link rel="stylesheet" type="text/css" href="Style2.css">
<link rel="stylesheet" type="text/css" href="subbox.css">
	</script>
</head>
<body style="background-color: ">
<?php include('header.php'); ?>
<!--the main section -->
	<div class="header" style="height:100%;">
		<h2 class="headtitle" style="text-align: left; margin: 20px; font-size: 50px;"><?php echo htmlspecialchars($minor['Title']); ?></h2>
	</div>
	<div class="mainpic">
		<img style="width:100%; height:100%;" src="" alt="imgvariable">
	</div>
	<hr>
	<div class="boxoflists">
	<div class="listof">
	<h5>Subjects you will learn...</h5>
	<ul class="dashed">
		<?php foreach(explode(',',$minor['things learned']) as $why) { ?>
			<li><?php echo htmlspecialchars($why); ?></li>
		<?php } ?>
	</ul>
	</div>
	<div class="listof">
	<h5>Why learn this...</h5>
	<ul class="dashed">
		<?php foreach(explode(',',$minor['why learn']) as $why) { ?>
			<li><?php echo htmlspecialchars($why); ?></li>
		<?php } ?>
	</ul>
	</div>
	</div>
	<hr>
	<p class="smalltype">*Listed from most popular to least</p>
	<?php foreach($courses as $course) {
	?>
	<div class="minorsubjects">
		<div class="minorcontainer" onmouseenter="document.getElementById('demo').style.display = 'flex'" 
		onmouseleave="document.getElementById('demo').style.display = 'none'"  
	 	onscroll="document.getElementById('demo').style.display = 'none'">
			<div class="minortitle"><a><?php echo htmlspecialchars($course['Title']); ?></a>
			</div>
			<a class="majorlink startbutton" href="subjectemp.php?id2=<?php echo $course['id']?>">Learn</a>
		</div>
		<div id="demo" class="popcontent">
			<div class="twosection" style="border-bottom:1px solid; display:block;">
				<h3>summary of topic</h3>
				<p><?php echo htmlspecialchars($course['summary']); ?></p></div>
			<div class="twosection">
				<div class="whyl" style="border-right:1px solid;">
					<h3>Why learn this</h3>
					<ul>
					<?php foreach(explode(',',$course['why learn']) as $why) { ?>
			<li><?php echo htmlspecialchars($why); ?></li>
					<?php } ?>
					</ul>
				</div>
				<div class="whyl">
					<h3>Things you learn</h3>
					<ul>
						<?php foreach(explode(',',$course['things learned']) as $why) { ?>
			<li><?php echo htmlspecialchars($why); ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
<?php include('footer.php') ?>
</body>
</html>