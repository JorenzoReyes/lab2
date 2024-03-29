<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pleiades</title>
	<!--Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta">
	<!--Bootstrap framework-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 	<!--Favicon-->
<link rel="icon" type="image/x-icon" href="https://64.media.tumblr.com/2500d6f4dc96ba1aaf5447bf53c68a4a/caf1519f5f2ac500-01/s500x750/5c44ebd6c3486104d4089883d4f19446d01a1328.jpg">
</head>
<style>

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

body {
  	background-color: lightblue;
  	color: white;
}

#myTitle {
  	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  	background-color: lightpink;
  	color: white;
  	text-align: center;
  	font-size: 80px;
	width:100%;
	padding:20px;
	font-family:Mukta,serif;
}

#backArrow {
	position:absolute;
	border-style: solid;
	border-radius: 100%;
	border-color:pink;
	margin-top:20px;
	margin-left:20px;
}

.kittoName {
	text-align:left;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	color:rgb(255, 192, 203);
	font-size: 75px;
}

#harriet img {
	width:45%;
	border-radius: 50px;
	border-color: rgb(255, 192, 203);
	border-style: solid;
}

#harriet {
	margin-top: 100px;
	margin-left: 100px;
}
#harry img {
    height:45%;
    width:auto;
	border-radius: 50px;
	border-color: pink;
	border-style: solid;
}

#harry {
	margin-top: 100px;
	margin-left: 100px;
}


#hagrid {
	margin-top: 100px;
	margin-left: 100px;
}

#hagrid img {
    height:45%;
    width:auto;
	border-radius: 50px;
	border-color: pink;
	border-style: solid;
}

#bunini {
	margin-top: 100px;
	margin-left: 100px;
}

#bunini img {
    height:45%;
    width:auto;
	border-radius: 50px;
	border-color: pink;
	border-style: solid;
}

#kitto-info {
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

.content {
padding: 16px;
}

.sticky {
position: fixed;
top: 0;
width: 100%;
}

.sticky + .content {
padding-top: 102px;
}
</style>

<body id='bodyImage'>
	
	<div id="myHeader" class='col-12'>
		<div>
			<a href='index.php'> <img id='backArrow' src='https://i.imgur.com/hnyXhqU.jpg'></a>
		</div>
		<h1 id='myTitle'>My Kittos</h1>
	</div>

<div class="content">
	<div id='kitto-info'>
		<p>
		<?php
			echo"I have ";
			$katos=2+2;
			echo"". $katos ."";
			echo" cats!";
			echo"<p>";
			echo"and they are!";
			echo"</p>";
		?>
		</p>
	</div>

	<div id='harriet'>
		<h1 class='kittoName'>  </h1> 

		<img src='https://i.imgur.com/fUsTvrA.jpg' alt='harriet skrem'>

		<h6 id='harrietTxt'> </h6>
		<p id='harrietImgDate'></p>
	</div>

	<div id='harry'>
		<h1 class='kittoName'></h1>
		<img src='https://i.imgur.com/3KJ5sJy.jpg' alt='harry stairs'>

		<p><span id='harryImgDate'> </span></p>
			
	</div>

	<div id='hagrid'>
		<h1 class='kittoName'></h1>
		<img src='https://i.imgur.com/uskv9su.jpg' alt='hagrid pacute'>

		<p><span id='hagridImgDate'> </span></p>
			
	</div>

	<div id='bunini'>
		<h1 class='kittoName'></h1>
		<img src='https://i.imgur.com/cFx1SuK.jpg' alt='bunini maarte'>

		<p><span id='buniniImgDate'> </span></p>
			
	</div>
</div> <!--content-->
<script>

class Cat {
	constructor(name, age, eyeColor, date) {
		this.name = name;
		this.age = age;
		this.eyeColor = eyeColor;
		this.date = new Date(date);
	}
}

const harriet = new Cat ("Harriet", 6, "Hazel", "2023-12-01")
const harry = new Cat ("Harry", 1, "Yellow", "2024-01-10")
const hagrid = new Cat ("Hagrid", 1, "Blue", "2024-01-10")
const bunini = new Cat ("Bunini", 1, "Yellow", "2023-12-24")


var kittoName = document.getElementsByClassName("kittoName");

kittoName[0].innerHTML = harriet.name;
kittoName[1].innerHTML = harry.name;
kittoName[2].innerHTML = hagrid.name;
kittoName[3].innerHTML = bunini.name;

document.getElementById("harrietImgDate").innerHTML = harriet.date;
document.getElementById("harryImgDate").innerHTML = harry.date;
document.getElementById("hagridImgDate").innerHTML = hagrid.date;
document.getElementById("buniniImgDate").innerHTML = bunini.date;

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


</script>
</body>

<!--SOURCES
home icon - https://www.pinterest.ph/pin/38913984274393009/
-->