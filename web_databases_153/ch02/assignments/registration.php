<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML form example</title>
</head>

<body>
	
	<?php
// 	extract data and print it
	
	$name = $_POST['fullname'];
	$gender = $_POST['gender'];
	$yearInSchool = $_POST['yearInSchool'];
	$hobbies = $_POST['hobbies'];
	$comments = $_POST['comments'];
	
//  we needed to loop thru an array
	foreach ($hobbies as $hobby) {
		$hobbycontent .= $hobby.',';
	}
	
//  this is what goes inside the server 
	echo $name . '<br/>' . $gender . '<br />' . $yearInSchool . '<br />' . $hobbycontent . '<br />' . $comments;
//	var_dump($_POST)
	?>
	
	<form action="registration.php" method="POST">
		<input type="text" name="fullname" placeholder="Enter Your Full Name" /> <br />
		<input type="radio" name="gender" value="Male" /> Male <br />
		<input type="radio" name="gender" value="Female" /> Female <br />
		<select name="yearInSchool"> 
			<option value="Freshman">Freshman</option>
			<option value="Sophomore">Sophomore</option>
			<option value="Junior">Junior</option>
			<option value="Senior">Senior</option>
		</select> <br />
		<input type="checkbox" name="hobbies[]" value="Football"/>Football <br />
		<input type="checkbox" name="hobbies[]" value="Hockey"/>Hockey <br />
		<input type="checkbox" name="hobbies[]" value="Baseball"/>Baseball <br />
		<textarea name="comments"></textarea>
			  
		<input type="submit" name="submit" placeholder="Submit Data"/>
	</form>
	
</body>
</html>

