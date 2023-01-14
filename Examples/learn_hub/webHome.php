<!doctype html>
<html>
	<?php
include('conn.php');
	
// write query
	$sql = 'SELECT * FROM majortb';
	
//make query and get results
	$result = mysqli_query($conn, $sql);
	
// feth the resulting rows as an array
	$major = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	mysqli_free_result($result);
?>
<head>
<meta charset="UTF-8">
<title>Learning Home</title>
<script src="https://kit.fontawesome.com/ea4930f969.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Bellota Text" rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="Style.css">
</head> 
<body>
<?php include('header.php'); ?>
	<div class="topimg">
		<h1 class="title">Learnhub</h1>
		<div class="purp">
			<div>Learn</div>
			<div>Grow</div>
			<div>Explore</div>
		</div>
		<div class="middlecontent">
			<div class="middle">There is so much information and oppertunities to learn on the internet. </br>We are here to help you find the right ones for you</div>
			<div class="middle"><a href="" class="topbutton" style="">Start Learning</a></div>
		</div>
	</div>
	<div class="commentbox"><p class="comment">Find, compare, and select online learning resources for any topic easier and faster</p></div>
	<div class="outsidebox">
		<?php foreach($major as $majorsub) {
	?>
		<div class="insidebox"><a class="majorlink" href="majortemp.php?id=<?php echo $majorsub['id']?>"><img src="<?php echo htmlspecialchars($majorsub['pic src']); ?>" class="majorimg"><h2><?php echo htmlspecialchars($majorsub['Title']); ?></h2></a></div>
		<?php } ?>
	</div>
</body>
</html>
