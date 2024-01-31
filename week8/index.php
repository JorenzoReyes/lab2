<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pleiades</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta">
	<!--Bootstrap framework-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 	<!--Favicon-->
<link rel="icon" type="image/x-icon" href="https://64.media.tumblr.com/2500d6f4dc96ba1aaf5447bf53c68a4a/caf1519f5f2ac500-01/s500x750/5c44ebd6c3486104d4089883d4f19446d01a1328.jpg">
<style>
#myTitle {
  	background-color: lightpink;
	padding:20px;
	margin:auto;
	display:block;
}

#myPic {
	width: 300px;
	height: 300px;
	display: block;
	margin:auto;
	border-style: solid;
	border-radius: 100%;
	border-color: pink;
	margin-top:20px;
	margin-bottom:20px;
}

.interest {
	margin-top:50px;
	width:1080px;
}

.interest div{
	margin-left:40px;
	margin-right:40px;
}
.text {
	margin:15px;
	margin-right:20px;
	border-radius: 50px;
	background-color:lightpink;
}
.text h2 {
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	text-align:center;
	color:white;
	padding:20px;
}

body {
  	background-color: lightblue;
  	color: white;
}

.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 29.7%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

.boxText {
	font-size:50px;
	font-family:Outfit,serif;
}

a:link {
	text-decoration:none;
}

a:hover h2 {
	color:rgb(170, 150, 190);
}

#self-info {
	background-color: aliceblue;
	text-align: center;
	border-style: solid;
	border-radius: 25px;
	border-color: lightpink;
	font-size: 25px;
	color:pink;
	width:30%;
	margin:auto;
}

.info {
  margin: auto;
  width: 60%;
}

#name {
	color:rgb(145, 75, 151);
}

#courseSection {
	color:rgb(75, 76, 173);
}

.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}

.nav {
	text-align: center;
}

.nav ul {
	margin:auto;
	width:100%;
}

.nav li {
 	display: inline-block;
}

#jumpscare {
	width:350px;
	height:350px;
	margin:auto;
}

#jumpscareButton {
	font-size:25px;
}
</style>
</head>

<body id="bodyImage">

<div class='col-12' style='background-color: lightpink';>
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
</div>

<div class='nav'>
<ul class='interest col-12'>
	<li class='col-4 text'>
		<?php
		echo"<a href='kittos.php'> <h2 class='boxText'> ";
		function kittoName() {
			echo"My kittos";
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