

<?php 
	
	$title = $author = $time = $input1 = $input2 = $input3 = $things1 = $things2 = $things3 =$cost = $level =$minor = $major = $summary = '';
	
$errors = array('title'=>'', 'author'=>'', 'time'=>'', 'input1'=>'', 'things1'=>'', 'major'=>'', 'minor'=>'', 'cost'=>'', 'level'=>'', 'summary' => '');
	if(isset($_POST['submit'])){
		
	if(empty($_POST['title'])){
		$errors['title'] = 'needs a title </br>';
	} else {
      $title = $_POST['title'];
		if(!preg_match('/^[A-Za-z\s]+$/', $title)){
			$errors['title'] = 'Title must be letters and spaces only';
		}
	}
	
	//check author
		if(empty($_POST['author'])){
		$errors['author'] ='needs a author </br>';
	} else {
		     $author = $_POST['author'];
		if(!preg_match('/^[A-Za-z\s]+$/', $author)){
			$errors['author'] = 'author must be letters and spaces only';
		}
	}
	
	//check summary
		if(empty($_POST['summary'])){
		$errors['summary'] = 'needs a summary </br>';
	} else {
		     $summary = $_POST['summary'];
		if(!preg_match('/^[A-Za-z\s]+$/', $summary)){
			$errors['summary'] = 'summary must be letters and spaces only';
		}
	}
		
			//check time
		if(empty($_POST['time'])){
		$errors['time'] = 'needs a time estimate </br>';
	} else {
		     $time = $_POST['time'];
		if(!preg_match('/[0-9]*$/', $time)){
			$errors['time'] = 'time must be numbers only';
		}
	}
		
			//check input1
		if(empty($_POST['input1']) && empty($_POST['input2'])){
		$errors['input1'] = 'needs at least two reasons why</br>';
	} else {
		     $input1 = $_POST['input1'];
			$input2 = $_POST['input2'];
			$input3 = $_POST['input3'];
		if(!preg_match('/^[A-Za-z\s]+$/', $input1) && !preg_match('/^[A-Za-z\s]+$/', $input2)  && !preg_match('/^[A-Za-z\s]+$/', $input3)){
			$errors['input1'] = 'input1 must be letters and spaces only';
		}
	}
		
			//check things1
		if(empty($_POST['things1']) && empty($_POST['things2'])){
		$errors['things1'] = 'needs at least two reasons why</br>';
	} else {
		     $things1 = $_POST['things1'];
			$things2 = $_POST['things2'];
			$things3 = $_POST['things3'];
		if(!preg_match('/^[A-Za-z\s]+$/', $things1) && !preg_match('/^[A-Za-z\s]+$/', $things2) && !preg_match('/^[A-Za-z\s]+$/', $things3)){
			$errors['things1'] = 'input1 must be letters and spaces only';
		}
	}
		
			//check major
		if(empty($_POST['major'])){
		$errors['major'] = 'needs a major </br>';
	} else {
		     $major = $_POST['major'];
		if(!preg_match('/^[A-Za-z\s]+$/', $major)){
			$errors['major'] = 'major must be letters and spaces only';
		}
	}
		
			//check minor
		if(empty($_POST['minor'])){
		$errors['minor'] = 'needs a minor </br>';
	} else {
		     $minor = $_POST['minor'];
		if(!preg_match('/^[A-Za-z\s]+$/', $minor)){
			$errors['minor'] = 'minor must be letters and spaces only';
		}
	}
		
			//check cost
		if(empty($_POST['cost'])){
		$errors['cost'] = 'needs a cost </br>';
	} else {
		     $cost = $_POST['summary'];
		if(!preg_match('/^[A-Za-z\s]+$/', $cost)){
			$errors['cost'] = 'cost must be letters and spaces only';
		}
	}
		
				//check level
		if(empty($_POST['level'])){
		$errors['level'] = 'needs a level </br>';
	} else {
		     $level = $_POST['level'];
		if(!preg_match('/^[A-Za-z\s]+$/', $level)){
			$errors['level'] = 'level must be letters and spaces only';
		}
	}
		
	}
	?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>userinputtest</title>
<link rel="stylesheet" type="text/css" href="userinput.css">
</head>

<body>
	<div class="flexbox">
		<div class="add">
		<p style="font-size: 20px; text-align: center;">ADD</p></div>
	<div class="question">
	<strong>This is the question or the stament asking the user for some response?</strong>
		</div>
		<hr>
<!-- for entering sentances with length 10-30 characters
		<div class="answer">
<form action="/action_page.php">
    <input type="text" id="fname" name="answer" placeholder="Response..">
    <input type="submit" class="topbutton" value="Submit">
  </form>
		</div>
-->
<!-- entering sentances with length 30-200 characters
	<div class="answer">
<form action="/action_page.php">
    <input type="text" id="fname" style="font-size:15px; height: 100px; padding: 0 0 75px 5px;" name="answer" placeholder="Response..">
    <input type="submit" class="topbutton" value="Submit">
  </form>
		</div>	
-->
		<!-- radio for entering answers
	<div class="answer">
<form action="/action_page.php">
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
   <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
    <input type="submit" class="topbutton" value="Submit">
  </form>
		</div>	
--> 
	<div class="answer" style="height:auto;">
<form method="POST" action="userimput.php">
	<label>Title of course:</label>	
	<span> <?php echo $errors['title'] ?></span>
  <input type="text" name="title" value="<?php echo $title ?>">
	
		<label>Author of course:</label><span> <?php echo $errors['author'] ?></span>	
  <input type="text" name="author" value="<?php echo $author ?>">
	
	<label for="male">Summary:</label><span> <?php echo $errors['summary'] ?></span>	
  <input type="text" id="fname" style="font-size:15px; height: 100px; padding: 0 0 75px 5px;" name="summary" value="<?php echo $summary ?>">
	
	<label for="male">Time course takes in hours:</label><span> <?php echo $errors['time'] ?></span>	
<input type="text" name="time" style="width: 20%; margin-left: 5%;" value="<?php echo $time ?>">
	
	<label for="male">Why learn it:</label>	<span> <?php echo $errors['title'] ?></span>
	  <input type="text" name="input1" value="<?php echo $input1 ?>"><br>
	<input type="text" name="input2" value="<?php echo $input2 ?>"><br>
	<input type="text" name="input3" value="<?php echo $input3 ?>"><br>
	
	<label for="male">Things that will be learned:</label>	<span> <?php echo $errors['things1'] ?></span>
	<input type="text" name="things1" value="<?php echo $things1 ?>"><br>
	<input type="text" name="things2" value="<?php echo $things2 ?>"><br>
	<input type="text" name="things3" value="<?php echo $things3 ?>"><br>
	
	<label for="male">What major catagory does your course fit in:</label>	<span> <?php echo $errors['major'] ?></span>
	    <select id="catagory" name="major">
	  <option value="s">Select major..</option>
      <option value="Playtime">major1</otption>
		<option value="Beauty">major2</option>
      <option value="Fun">major3</option>
    </select>
		
	<label for="male">What minor catagory does your course fit in:</label>	<span> <?php echo $errors['minor'] ?></span>
			<select id="catagory" name="minor">
	  <option value="s">Select minor..</option>
      <option value="Playtime">minor1</otption>
		<option value="Beauty">minor2</option>
      <option value="Fun">minor3</option>
    </select>
	
		<label for="male">Does the course cost:</label><span> <?php echo $errors['cost'] ?></span><br>
<input type="radio" id="male" name="cost" value="cost">
  <label for="male">Cost</label><br>
  <input type="radio" id="female" name="cost" value="nocost">
  <label for="female">No cost</label><br>
	
		<label for="male">What is the difficulty level:</label><span> <?php echo $errors['level'] ?></span><br>
  <input type="radio" id="male" name="level" value="Beginner">
  <label for="male">Beginner</label><br>
  <input type="radio" id="female" name="level" value="Intermediate">
  <label for="female">Intermediate</label><br>
  <input type="radio" id="other" name="level" value="Expert">
  <label for="other">Expert</label>
    <input type="submit" class="topbutton" name= "submit" value="Submit">
  </form>
		</div>	
<!--
	<div class="answer">
		<p>Contents of this box will be a form of some type taking many forms including a submit button</p>
		</div>
-->
	</div>
</body>
</html>
