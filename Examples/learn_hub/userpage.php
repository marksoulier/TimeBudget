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
	
	
		// write query for specif minor
	$sql2 = 'SELECT * FROM usertb';
	
//make query and get results
	$result2 = mysqli_query($conn, $sql2);
	
// feth the resulting rows as an array
	$user = mysqli_fetch_all($result2, MYSQLI_ASSOC);
	
	mysqli_free_result($result2);
	
	
	
	
// close connection
	mysqli_close($conn);
?>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Style2.css">
<link rel="stylesheet" type="text/css" href="users.css">
<style>
	.userheading {
	display:flex;
	width: auto;
	margin: 10px;
	align-content: center;
}
.userheading > .box {
	align-content: center;
	width: 45%;
	}
</style>
</head>

<body>
	<?php include('header.php'); ?>
	<div class="userheading">
	<div class="box">
	<p style="font-size:40px;">John Doe</p>
	</div>
	<div class="box" style="padding:50px;">
	<span class="points"><?php echo htmlspecialchars($user[0]['points'])?></span><span class="pointsname"> points</span>
	</div>
	</div>
	<h2 class="center">My courses</h2>
	<!-- list all saved courses -->
<?php foreach($courses as $course) {
	?>
	<div class="minorsubjects">
		<div class="minorcontainer" onmouseenter="document.getElementById('demo').style.display = 'flex'" 
		onmouseleave="document.getElementById('demo').style.display = 'none'"  
	 	onscroll="document.getElementById('demo').style.display = 'none'">
			<div class="minortitle"><a><?php echo htmlspecialchars($course['Title']); ?></a>
			</div>
			<div class="startbutton"><a>Learn</a></div>
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
	<!-- leadership board (split up into 2, overall and per month)-->
	<h2 class="center">Leadership board</h2>
	<?php foreach($courses as $course) {
	?>
	<div class="minorsubjects">
		<div class="minorcontainer" onmouseenter="document.getElementById('demo').style.display = 'flex'" 
		onmouseleave="document.getElementById('demo').style.display = 'none'"  
	 	onscroll="document.getElementById('demo').style.display = 'none'">
			<div class="minortitle"><a><?php echo htmlspecialchars($course['Title']); ?></a>
			</div>
			<div class="startbutton"><a>Learn</a></div>
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