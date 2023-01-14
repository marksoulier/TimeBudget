<!doctype html>
<html>
	<?php
include('conn.php');
	//check if get request work
if(isset($_GET['id'])) {
		$id = mysqli_real_escape_string($conn, $_GET['id']);
	
	// write query for major catagory
	$sql = "SELECT * FROM majortb WHERE id = $id";
	
//make query and get results
	$result = mysqli_query($conn, $sql);
	
// feth the resulting rows as an array
	$major = mysqli_fetch_assoc($result);
	
	mysqli_free_result($result);
	
	
	}

		// write query for minor subjects
	$sql2 = 'SELECT * FROM minortb';
	
//make query and get results
	$result2 = mysqli_query($conn, $sql2);
	
// feth the resulting rows as an array
	$minor = mysqli_fetch_all($result2, MYSQLI_ASSOC);
	
	mysqli_free_result($result2);
	
	
	
	
// close connection
	mysqli_close($conn);
?>
<head>
<meta charset="UTF-8">
<title>majortemp</title>
<link rel="stylesheet" type="text/css" href="Style2.css">
<link rel="stylesheet" type="text/css" href="subbox.css">
<script src="https://kit.fontawesome.com/ea4930f969.js" crossorigin="anonymous">
</script>

</head>

<body>
	<?php include('header.php'); ?>
<!--the main section -->
	<div class="header">
		<h2 class="headtitle"><?php echo htmlspecialchars($major['Title']); ?></h2>
	</div>
	<div class="mainpic">
		<img style="width:100%; height:100%;" src="<?php echo htmlspecialchars($major['pic src']); ?>" alt="imgvariable">
	</div>
	<hr>
	<div class="listof">
	<h5>Why learn this...</h5>
	<ul class="dashed">
		<?php foreach(explode(',', $major['why learn']) as $why) { ?>
		<li><?php echo htmlspecialchars($why); ?></li>
		<?php } ?>
	</ul>
	</div>
	<hr>
	<p class="smalltype">*Listed from most popular to least</p>
		<?php foreach($minor as $minor) {
	?>
	<div class="minorsubjects">
		<div class="minorcontainer" onmouseover="document.getElementById('demo').style.display = 'flex'" 
		onmouseout="document.getElementById('demo').style.display = 'flex'">
			<div class="minortitle"><a>
				<?php echo htmlspecialchars($minor['Title']); ?>
				</a>
			</div>
			<a class="majorlink startbutton" href="minortemp.php?id1=<?php echo $minor['id']?>">Start</a>
		</div>
		<div id="demo" class="popcontent">
			<div class="twosection" style="border-bottom:1px solid; display:block;">
				<h3>summary of topic</h3>
				<p><?php echo htmlspecialchars($minor['Summary']); ?></p></div>
			<div class="twosection">
				<div class="whyl" style="border-right:1px solid;">
					<h3>Why learn this</h3>
					<ul>
								<?php foreach(explode(',',$minor['why learn']) as $why) { ?>
								<li><?php echo htmlspecialchars($why); ?></li>
								<?php } ?>
					</ul>
				</div>
				<div class="whyl">
					<h3>Things you learn</h3>
					<ul>
							<?php foreach(explode(',',$minor['things learned']) as $why) { ?>
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