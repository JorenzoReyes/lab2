<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pleiades</title>
	<link rel="stylesheet" href="hobbiescss.css">
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


</style>
    
<body>
    
<div id="myHeader" class='col-12'>
	<div>
		<a href='index.php'> <img id='backArrow' src='https://i.imgur.com/hnyXhqU.jpg'></a>
	</div>
	<h1 id='myTitle'>My Hobbies</h1>

</div>

<div class="content">

<h3 class='titles'>Listening to music</h1>
<h3 class='subtitles'>My top 10 albums, as of the moment</h3>
<h6 class='subtext'>it was hard for me to decide what my all time favorite albums are ●︿●</h6>

<div class="nav">
	<ul>
		<li class='col-2 text'>Bonito Generation (2016)
		<img class="img-fluid" src="https://i.imgur.com/JyMrNOj.jpg" alt="Bonito Generation Album Cover">
		<p>Kero Kero Bonito</p>
		<li class='col-2 text'>Color Theory (2020)
		<img class="img-fluid" src="https://i.imgur.com/cUCv1mD.jpg" alt="Color Theory Album Cover">
		<p>Soccer Mommy</p>
		<li class='col-2 text'><span class="fixText">""</span>  Blonde (2016)  <span class="fixText">""</span>
		<img class="img-fluid" src="https://i.imgur.com/akLD8AF.jpg" alt="Blonde Album Cover">
		<p>Frank Ocean</p>
		<li class='col-2 text'>We Will Always Love You (2020)
		<img class="img-fluid" src="https://i.imgur.com/aoQ8axk.jpg" alt="We Will Always Love You Album Cover">
		<p>The Avalanches</p>
		<li class='col-2 text'>Trust in The Lifeforce of the Deep Mystery (2019)
		<img class="img-fluid" src="https://i.imgur.com/mdvGZsH.png" alt="Trust in The Lifeforce of the Deep Mystery Album Cover">
		<p>The Comet is Coming</p>
	</ul>

	<ul>
		<li class='col-2 text'>KOLATERAL (2019)
		<img class="img-fluid" src="https://i.imgur.com/mJw172p.jpg" alt="KOLATERAL Album Cover">
		<p>Kolateral</p>
		<li class='col-2 text'><span class="fixText">"  "</span>    IGOR (2019)   <span class="fixText">"  "</span>
		<img class="img-fluid" src="https://i.imgur.com/xPXuJg9.jpg" alt="IGOR  Album Cover">
		<p>Tyler, The Creator</p>
		<li class='col-2 text'>Joy As An Act of Resistance (2018)
		<img class="img-fluid" src="https://i.imgur.com/qQEfZCc.png" alt="Joy As An Act of Resistance Album Cover">
		<p>IDLES</p>
		<li class='col-2 text'>Scenery (シーナリィ) (1976)
		<img class="img-fluid" src="https://i.imgur.com/BSdJOvP.jpg" alt="Scenery (シーナリィ) Album Cover">
		<p>Ryo Fukui</p>
		<li class='col-2 text'>EVANGELION Piano Forte (2013)
		<img class="img-fluid" src="https://i.imgur.com/f4nSovV.jpg" alt="EVANGELION Piano Forte Album Cover">
		<p>鷺巣詩郎 (Shiro Sagisu)</p>
	</ul>
	
</div>

<h1 class='titles'>Watching movies</h1>

<div class="nav">
	<ul>
		<li class='col-2 text'>Green Hornet
		<img class="img-fluid" src="https://m.media-amazon.com/images/M/MV5BMTcwOTMwMDYyMl5BMl5BanBnXkFtZTcwMzAxMjMyNA@@._V1_.jpg" alt="EVANGELION Piano Forte Album Cover">
		<li class='col-2 text'>Audition
		<li class='col-2 text'>Drive
		<li class='col-2 text'>Train to Busan
		<li class='col-2 text'>Little Women
	</ul>

	<ul>
		<li class='col-2 text'>Old Boy
		<li class='col-2 text'>The Handmaiden
		<li class='col-2 text'>Interstellar
		<li class='col-2 text'>Parasite
		<li class='col-2 text'>Decision to Leave
	</ul>
	
</div>

<h1 class='titles'>Playing video games</h1>

<div class="nav">
	<ul>
		<li class='col-2 text'>Bonito Generation
		<li class='col-2 text'>Color Theory
		<li class='col-2 text'>Blonde
		<li class='col-2 text'>We Will Always Love You
		<li class='col-2 text'>Trust in The Lifeforce of the Deep Mystery
	</ul>

	<ul>
		<li class='col-2 text'>KOLATERAL
		<li class='col-2 text'>IGOR
		<li class='col-2 text'>Joy As An Act of Resistance
		<li class='col-2 text'>Scenery (シーナリィ)
		<li class='col-2 text'>EVANGELION Piano Forte
	</ul>
</div>

</div> <!--content-->
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
Albums:
https://kerokerobonito.bandcamp.com/album/bonito-generation
https://upload.wikimedia.org/wikipedia/en/2/2c/Kero_Kero_Bonito_-_Bonito_Generation.jpg

https://sopharela.bandcamp.com/album/color-theory
https://media.pitchfork.com/photos/5e505f07ba238a0008307f4b/1:1/w_450%2Cc_limit/color%2520theory_Soccer%2520Mommy.jpg

https://genius.com/albums/Frank-ocean/Blonde
https://upload.wikimedia.org/wikipedia/en/a/a0/Blonde_-_Frank_Ocean.jpeg

https://genius.com/albums/The-avalanches/We-will-always-love-you
https://upload.wikimedia.org/wikipedia/en/c/ca/Avalanches-wwaly.jpg

https://genius.com/albums/The-comet-is-coming/Trust-in-the-lifeforce-of-the-deep-mystery
https://upload.wikimedia.org/wikipedia/en/e/e5/The_Comet_Is_Coming_-_Trust_in_the_Lifeforce_of_the_Deep_Mystery.png

https://genius.com/albums/Kolateral-phl/Kolateral
https://upload.wikimedia.org/wikipedia/en/1/19/This_is_the_cover_art_for_the_rap_album_Kolateral_by_various_artists.jpg

https://genius.com/albums/Tyler-the-creator/Igor
https://upload.wikimedia.org/wikipedia/en/5/51/Igor_-_Tyler%2C_the_Creator.jpg

https://genius.com/albums/Idles/Joy-as-an-act-of-resistance
https://i.scdn.co/image/ab67616d0000b27322f5be50ae2fbf54de60b995

https://genius.com/albums/Ryo-fukui/Scenery
https://i.scdn.co/image/ab67616d0000b273b752bbaa0dd7578b736f7cc1

https://genius.com/albums/Shiro-sagisu/Evangelion-piano-forte
https://i.scdn.co/image/ab67616d00001e021eea78379e56659d571c63a3

Movies:
https://www.imdb.com/title/tt0990407/


Video Games:


-->