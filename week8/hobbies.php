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
body {
  	background-color: lightblue;
  	color: white;
}

#myTitle {
  	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  	background-color: lightpink;
  	color: white;
  	text-align: center;
  	font-size: 300%;
	padding:20px;
	font-family:Mukta,serif;
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

#backArrow {
	position:absolute;
	border-style: solid;
	border-radius: 100%;
	border-color:pink;
	margin-top:20px;
	margin-left:20px;
}

.titles {
	text-align: center;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	font-size: 100px;
	margin: 30px 800px 30px 800px;
	border-radius:25px;
	background-color:lightpink;
}

.subtitles {
	border-radius:25px;
	text-align: center;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	font-size: 50px;
	background-color:lightpink;
	margin: 0px 800px 0px 800px;
}
.subtext {
	border-radius:25px;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	font-size:15px;
	text-align:center;
	background-color:lightpink;
	margin: auto;
	width:20%;
}
</style>
    
<body id='bodyImage'>
    
    <div class='col-12'>
        <div>
			<a href='index.php'> <img id='backArrow' src='https://i.imgur.com/hnyXhqU.jpg'></a>
		</div>
		<h1 id='myTitle'>My Hobbies</h1>

	</div>

<div>
	<h1 class='titles'>Listening to music</h1>
	<h3 class='subtitles'>My top 10 albums, as of the moment</h3>
	<h6 class='subtext'>it was hard for me to decide what my all time favorite albums are</h6>
	
	
</div>

<div>
	<h1 class='titles'>Playing video games</h1>

	
</div>

<div>
	<h1 class='titles'>Watching movies</h1>

	
</div>

<script>

class Music {
	constructor(name, year, artist)
	{
		this.name = name;
		this.year = year;
		this.artist = artist;
	}
}
class VideoGame {
	constructor(name, year, developer)
	{
		this.name = name;
		this.year = year;
		this.developer = developer;
	}
}
class Movies {
	constructor(name, year, director)
	{
		this.name = name;
		this.year = year;
		this.director = director;
	}
}
</script>
</body>

<!--SOURCES
home icon - https://www.pinterest.ph/pin/38913984274393009/
-->