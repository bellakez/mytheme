<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Selv-defineret meta beskrivelse-->
    <meta name="description" content="Safari" />
    <meta name="keywords" content="unesco, verdensmål, skoler, bæredygtighed, klima, undervisning, miljø, HTML, CSS, JavaScript" />
    <meta name="author" content="Andrea, Alberte, Ida, Nina, Isabella" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--faveicon-->
    <link rel="icon" type="image/x-icon" href="logo.svg" />
	<link rel="stylesheet" href="style.css">


	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<title>Projekter</title>
<style>
		body {
		color: rgb(108,108,108);
	}
		img {
  	max-width: 100%;
	}
	* {
		padding:0;
		margin:0;
	}
/* ________________________FOR MOBIL________________________ */
@media only screen and (max-width: 600px) {
h1 {

font-family: industry-inc-base, sans-serif;
font-weight: 400;
font-style: normal;
font-size: 1rem;
}

h2 {
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 0.9rem;
text-align: center;
}

h3 {
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 0.8rem;
line-height: normal;
}
h4 {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;
font-size: 0.6rem;
}
p {
font-family: nunito, sans-serif;
font-weight: 400;
font-style: normal;
font-size: 0.6rem;
line-height: 1.6;
}
/* beskrivelsen omkring projekterne oppe i toppen af siden */
.projektside_beskrivelse {
margin: 50px;
}
button {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;
}
/* styling af projektet hoved infor beskrivelse */
.info_box {
	margin:20px;
}
.hoved_info {
	padding:5px;
	margin:5px;
}
.kort_info {
	padding:5px;
	margin:5px;
}
/* styling af projektet lange beskrivelse */
.projekt_beskrivelse {
	padding:10px;
	margin:10px;
}
.textbox {
	padding:5px;
	margin:5px;
}
.projekt_billede {
	padding:5px;
	margin:5px;
}
/*____STYLING AF EVALUERINGS BOX */
.evaluerings_box {
	margin:20px;
}
.evaluerings_box img{
	padding:5px;
	margin:5px;
}
.elev {
	background-color: rgb(235,245,222);
	padding:5px;
	margin:5px;
}
.laerer {
	background-color: rgb(235,245,222);
	padding:5px;
	margin:5px;
}

/* Navnet på projektet */
/*____overskrift 2 */
.overskrift_2 {
margin: 20px;
}
.overskrift_2 {
padding: 20px;
margin: 10px;
}
footer { 
	padding: 20px;
}
}


/* ________________________FOR SKÆRM________________________ */
@media only screen and (min-width: 600px) {
h1 {
font-family: industry-inc-base, sans-serif;
font-weight: 400;
font-style: normal;
font-size: 1.2rem;
}

h2 {
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 1rem;
text-align: center;
}

h3 {
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 1rem;
line-height: normal;
}
h4 {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;
font-size: 0.8rem;
}
p {
font-family: nunito, sans-serif;
font-weight: 400;
font-style: normal;
font-size: 0.8rem;
line-height: 1.6;
}

button {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;

}


/* styling af projektet hoved infor beskrivelse */
.info_box {
	margin: 90px;
}
.hoved_info {
	padding:10px;
	margin:10px;
}
.kort_info {
	padding:10px;
	margin:10px;
}
/* styling af billedet inde i kort beskrivelse boks */
.kort_info img {
	padding-top: 5px;
}
/* styling af projektet lange beskrivelse */
.projekt_beskrivelse {
	padding: 30px;
	margin: 40px;
}
.textbox {
	padding:10px;
	margin:10px;
}
.projekt_billede {
	padding:10px;
	margin:10px;
}
/*____STYLING AF EVALUERINGS BOX */
.evaluerings_box {
	padding: 30px;
	margin: 40px;
}
.evaluerings_box img{
	padding:10px;
	margin:10px;
}
.elev {
	background-color: rgb(235,245,222);
	padding:10px;
	margin:20px;
}
.laerer {
	background-color: rgb(235,245,222);
	padding: 10px;
	margin:20px;
}
/*____overskrift 2 */
.overskrift_2 {
padding: 40px;
margin: 50px;
}

}
/*_______________SLIDER___________________ */
#slider {
  position: relative;
  width: 30%;
  height: 50vw;
  margin: 150px auto;
  font-family: 'Helvetica Neue', sans-serif;
  perspective: 1400px;
  transform-style: preserve-3d;
}
input[type=radio] {
  position: relative;
  top: 108%;
  left: 50%;
  width: 18px;
  height: 18px;
  margin: 0 15px 0 0;
  opacity: 0.4;
  transform: translateX(-83px);
  cursor: pointer;
}


#slider label,
#slider label img {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  color: white;
  font-size: 70px;
  font-weight: bold;
  border-radius: 1px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 400ms ease;
}
/**første billede i center */
#s1:checked ~ #slide1,
 #s2:checked ~ #slide2,
  #s3:checked ~ #slide3,
   #s4:checked ~ #slide4,
    #s5:checked ~ #slide5 {
  box-shadow: 0 13px 26px rgba(0,0,0, 0.3), 0 12px 6px rgba(0,0,0, 0.2);
  transform: translate3d(0%, 0, 0px);
}
/**næste billede */
#s1:checked ~ #slide2,
 #s2:checked ~ #slide3,
  #s3:checked ~ #slide4,
   #s4:checked ~ #slide5,
    #s5:checked ~ #slide1 {
  box-shadow: 0 6px 10px rgba(0,0,0, 0.3), 0 2px 2px rgba(0,0,0, 0.2);
  transform: translate3d(20%, 0, -100px);
}
/**næste billede */
#s1:checked ~ #slide3,
 #s2:checked ~ #slide4,
  #s3:checked ~ #slide5,
   #s4:checked ~ #slide1,
    #s5:checked ~ #slide2 {
  box-shadow: 0 1px 4px rgba(0,0,0, 0.4);
  transform: translate3d(40%, 0, -250px);
}
/**forrige billede */
#s1:checked ~ #slide5,
 #s2:checked ~ #slide1,
  #s3:checked ~ #slide2,
   #s4:checked ~ #slide3,
    #s5:checked ~ #slide4 {
  box-shadow: 0 6px 10px rgba(0,0,0, 0.3), 0 2px 2px rgba(0,0,0, 0.2);
  transform: translate3d(-20%, 0, -100px);
}
/** næste forrige billede */
#s1:checked ~ #slide4,
 #s2:checked ~ #slide5,
  #s3:checked ~ #slide1,
   #s4:checked ~ #slide2,
    #s5:checked ~ #slide3 {
  box-shadow: 0 1px 4px rgba(0,0,0, 0.4);
  transform: translate3d(-40%, 0, -250px);
}
/*____STYLING AF INFO BOX */
.info_box {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	justify-content: space-between;
	background-color: rgb(235,245,222);	
}

/*____STYLING AF PROJEKT BESKRIVELSE */
.projekt_beskrivelse {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	justify-content: space-between;
}
/*____STYLING AF EVALUERINGS BOX */
.evaluerings_box {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	justify-content: space-between;

}
.undervisnings_knap {
  display: flex;
  justify-content: space-evenly;
  padding: 20px;
}

.style_knap button{
	background-color: #84B298;
	font-family: nunito, sans-serif;
}

.button_back {
	background-color: rgb(255,255,255);
	color: rgb(108,108,108);
}
.button_back:hover {
	background-color: rgb(255,255,255);
	color: #84B298;
}
.button_back a {
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 1rem;
line-height: normal;
}
.entry-meta {
	display: none;
}
.imprint {
	display: none;
}
footer {
	background-color: rgb(250,247,240);
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	justify-content: space-between;
}
footer img {
	max-width: 50%;
	padding: 5px;
}
.linked {
	max-width: 35%;
  padding: 10px;
}
.logo {
	padding: 10px;
}
.back_to_top a {
	font-family: nunito, sans-serif;
	font-weight: 900;
	font-style: normal;
	font-size: 1rem;
	color: rgb(108,108,108);
	padding: 10px;
}
.back_to_top a:hover {
  color:rgb(235,245,222);
}

</style>
</head>

<body>
	<button class="button_back">← Tilbage</button>
		<section class="sektion1">
			
		</section>

		<section id="sektion2">
				<article>
				<!--___Kasse om info øverst___-->
				<div class="info_box">
					<div class="hoved_info">
						<h3>Skolenavn:</h3>
						<p class="skolenavn"></p>
						<h3>Uddannelses trin:</h3>
						<p class="trin"></p>
						<h3>Fagområde:</h3>
						<p class="fagomraade"></p>
						<h3>Område:</h3>
						<p class="omraade"></p>
						<h3>Verdensmål:</h3>
						<p class="verdensmaal"></p>
					</div>
					<div class="kort_info">
						<h3>Kort om projektet</h3>
						<p class="kort_beskrivelse"></p>
						<img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/greener.png" alt="skole">
					</div>
				</div>
				<!--___Kasse om projekt beskrivelse med billede___-->
				<h3 class="overskrift_2"></h3>
				<div class="projekt_beskrivelse">
						<div class="textbox">
					<p class="lang_beskrivelse"></p>
					</div>
						<div class="projekt_billede">
						<img class="billede"src="" alt="">
					</div>
				</div>
				<!--___Kasse om evaluering___-->
				<h2>EVALUERING</h2>
				<div class="evaluerings_box">
					<div class="elev">
						<h3>Elevernes perspektiv</h3>
						<p class="p_elev"></p>
					</div>
					<div class="laerer">
						<h3>Lærernes perspektiv</h3>
						<p class="p_laerer"></p>
					</div>
				</div>
				<!--___KNAP OM UNDERVISNING___-->
				<div class="undervisnings_knap">
				<div class="style_knap">
				<button>SE UNDERVISNINGSMATERIALE</button>
				</div>
				</div>
				<div class="evaluerings_box">
					<img class="billede_a" src="" alt="">
					<img class="video" src="" alt="">
					<img class="billede_b" src="" alt="">
				</div>
				<h3 class="alle"></h3> <!-- det er til nulstil søgning -->
				</article>
		</section>
	

		<section id="liste"> <!-- liste over de projekter der passer passer til filtreringen -> skal ligges i template -->
			<img src="" alt="">
			<h3 class="projekt_navn"></h3>
			<h4 class="trin"></h4>
			<p class="kort_beskrivelse_projekt"></p>
		</section>
	<!-- bruges til at ryge til toppen-->
		<div class="back_to_top">
			<a href="#sektion2">Tilbage til top</a>
		</div>

		<!-- _____________SLIDER______________-->
		<h2>BEDSTE PROJEKTER 2021</h2>
		<section id="slider">
			<input type="radio" name="slider" id="s1" checked>
 			<input type="radio" name="slider" id="s2">
  			<input type="radio" name="slider" id="s3">
 			<input type="radio" name="slider" id="s4">
  			<input type="radio" name="slider" id="s5">

			<label for="s1" id="slide1"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/globalt.jpg" alt="bedste globale projekt"></label>
  			<label for="s2" id="slide2"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/baere.jpg" alt="bedste bæredygtige projekt"></label>
 			<label for="s3" id="slide3"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/verden.jpg" alt="bedste globale projekt"></label>
  			<label for="s4" id="slide4"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/globalt1.jpg" alt="bedste globale projekt"></label>
  			<label for="s5" id="slide5"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/baere1.jpg" alt="bedste bæredygtige projekt"></label>

		</section>
		<!-- FOOTER-->
		<footer>
			<div class="logo">
				<img src="<?php echo get_stylesheet_directory_uri()?>/logo_unesco.png" alt="logo">
			</div>
			<div class="kontakt">
				<h3>KONTAKT</h3>
				<h4>National Koordinator</h4>
				<p>Poul Erik Christoffersen</p>
				<p>pec@ungdomsbyen.dk</p>
				<p>Tlf: +45 4491 4646</p>
				<p>Direkte: +45 2174 4275</p>
			</div>
			<div class="adresse">
			<h3>ADRESSE</h3>
			<p>Ungdomsbyen</p>
			<p>c/o Global Platform</p>
			<p>Faelledvej 12C, 3. sal</p>
			<p>2200 Copenhagen N</p>
			<p>Denmark</p>
			</div>
			<div class="medier">
			<h3>FØLG MED PÅ</h3>
				<div class="wrapper">
        <a href="https://www.linkedin.com/company/unesco"
          ><div class="linked"><img src="<?php echo get_stylesheet_directory_uri()?>/icon/linked.png" alt="linkedin"/></div
        ></a>

        <a href="https://www.facebook.com/unescodanmark/"
          ><div><img src="<?php echo get_stylesheet_directory_uri()?>/icon/facebook.svg" alt="facebook"/></div
        ></a>
      </div>
			</div>
		</footer>

	<script>

	let projekt;
	document.addEventListener("DOMContentLoaded", getJson)


	async function getJson() {
	console.log("id er", <?php echo get_the_ID() ?>);
	let jsonData = await fetch(`https://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/projekt/<?php echo get_the_ID() ?>`); 
	projekt = await jsonData.json();
	visProjekt();
	}

	function visProjekt() {
	//______DETTE ER FØRSTE BOX MED INFO___________
	//document.querySelector(".overskrift").innerHTML = projekt.overskrift;
	document.querySelector(".skolenavn").innerHTML = projekt.skolenavn;
	document.querySelector(".trin").innerHTML = projekt.trin;
	document.querySelector(".fagomraade").innerHTML = projekt.fagomraade;
	document.querySelector(".omraade").innerHTML = projekt.omraade;
	document.querySelector(".verdensmaal").innerHTML = projekt.verdensmaal;
	document.querySelector(".kort_beskrivelse").innerHTML = projekt.kort_beskrivelse;
	//______DETTE ER FØRSTE BOX MED INFO___________
	document.querySelector(".overskrift_2").innerHTML = projekt.overskrift_2;
	document.querySelector(".lang_beskrivelse").innerHTML = projekt.lang_beskrivelse;
	document.querySelector(".billede").src = projekt.billede.guid;
	//______DETTE ER EVALUERINGS BOXEN___________
	document.querySelector(".p_elev").innerHTML = projekt.p_elev;
	document.querySelector(".p_laerer").innerHTML = projekt.p_laerer;
	//______DETTE DE 2 BILLEDER OG VIDEO NEDERST___________
	document.querySelector(".billede_a").src = projekt.billede_a.guid;
	document.querySelector(".video").src = projekt.video.guid;
	document.querySelector(".billede_b").src = projekt.billede_b.guid;
	}
	//getJson();

	document.querySelector(".button_back").addEventListener("click", () => {
	history.back();
	});
		</script>
		</body>
		</html>

<?php
get_footer();
