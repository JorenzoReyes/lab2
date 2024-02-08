<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pleiades</title>
	<link rel="stylesheet" href="indexstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta">
	<!--Bootstrap framework-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 	<!--Favicon-->
<link rel="icon" type="image/x-icon" href="https://64.media.tumblr.com/2500d6f4dc96ba1aaf5447bf53c68a4a/caf1519f5f2ac500-01/s500x750/5c44ebd6c3486104d4089883d4f19446d01a1328.jpg">

</head>

<body>

	<div id="temp" class='col-12'>
		<img id='myTitle' src='https://i.imgur.com/qwATS60.gif' alt='me'> 
	</div>

	<div class='col-12'>
		<img id='myPic' src='https://i.imgur.com/SWEFxQS.jpg' alt='Me'>
	</div>

	<div id='self-info'>
		<p>
			<?php
			$intro = "Hello! welcome to my personal page!";
			echo"". $intro ."";
			?>
		</p>
		<p> I'm <span id='name'></span> from <span id='courseSection'></span> </p>
		<p> Click any of the links to know more about me! </p>
	</div>

	<div class='nav'>
	<ul class='interest col-12'>
		<li class='col-4 text'>
			<?php
			echo"<a href='kittos.php'> <h2 class='boxText'> ";
			function kittoName() {
				echo"My Kittos";
			}
			kittoName();

			echo"</h2> </a>";
			?>
		</li>
		<li class='col-4 text'>
			<a href='hobbies.php'> <h2 class='boxText'> Hobbies </h2> </a>
		</li>
		<li class='col-5 text'>
			<a href='https://s.team/y23/kbpfmwr?l=english'> <h2 class='boxText'> Steam 2023 Review </h2> </a>
		</li>
	</ul>
	</div>


	<div id='jumpscare'>
		<p id='jumpscareButton' onclick='pleaseWait()'>
		<?php
		echo "Click me for a jumpscare."
		?>
		</p>
	</div>

	<?php
	// define variables and set to empty values
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$website = test_input($_POST["website"]);
	$comment = test_input($_POST["comment"]);
	$gender = test_input($_POST["gender"]);
	}

	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	?>

	<h2>PHP Form Validation Example</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	Name: <input type="text" name="name">
	<br><br>
	E-mail: <input type="text" name="email">
	<br><br>
	Website: <input type="text" name="website">
	<br><br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	<br><br>
	Gender:
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="other">Other
	<br><br>
	<input type="submit" name="submit" value="Submit">  
	</form>

	<?php
	echo "<h2>Your Input:</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
	?>
	
	<?php
	// for Xampp
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "myDB";

	// for apcwebprog
	$servername = "localhost";
	$username = "webprogss221";
	$password = "=latHen97";
	$dbname = "webprogss221";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO jjreyes_myguests (name, email, website,comment,gender)
	VALUES ('$name', '$email', '$website','$comment','$gender)";

	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>

<script>
const me = {
	firstName: "Jorenzo Martin",
	lastName: "Reyes",
	course: "BSCS-",
	section: "SS221",
	eyeColor: "Brown",
	age: "Not willing to disclose eme"
};

const name = () => {
    return me.firstName + " " + me.lastName;
}

const courseSection = () => {
	return me.course + me.section;
}

function pleaseWait () {
	document.getElementById("jumpscareButton").innerHTML = "Please wait for 3 seconds!";
	jumpscare();
}

function jumpscare() {
	setTimeout(myFunction, 3000);
}

function myFunction() {
  document.getElementById("jumpscare").style.backgroundImage = "url(https://i.imgur.com/RcvnsAd.gif";
}

document.getElementById("name").innerHTML = name();
document.getElementById("courseSection").innerHTML = courseSection();
</script>


</body>
</html>

<!--SOURCES
favicon - https://www.pinterest.ph/pin/38913984274393009/
home gif -  https://usagif.com/gif/cinnamoroll-super-happy-sticker-usagif/
jumpscare - https://giphy.com/stickers/SanrioKorea-sanrio-cinnamoroll-sanriokorea-JmOCq0T5qEJyZ3oQj8

-->