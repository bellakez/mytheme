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

	<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Selv-defineret meta beskrivelse-->
    <meta name="description" content="unesco" />
    <meta name="keywords" content="unesco, verdensmål, skoler, bæredygtighed, klima, undervisning, miljø, HTML, CSS, JavaScript" />
    <meta name="author" content="Andrea, Alberte, Ida, Nina, Isabella" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--fonte-->
	<link rel="stylesheet" href="https://use.typekit.net/azr3opv.css">
	<link rel="stylesheet" href="https://use.typekit.net/azr3opv.css">
	<link rel="stylesheet" href="https://use.typekit.net/azr3opv.css">
	<link rel="stylesheet" href="https://use.typekit.net/azr3opv.css">
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

h1 {

font-family: industry-inc-base, sans-serif;
font-weight: 400;
font-style: normal;
}

h2 {
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
}

h3 {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;
}
p {
font-family: nunito, sans-serif;
font-weight: 400;
font-style: normal;
}
button {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;
}
/*.globalt_medborgerskab {
  background-image: url(omraade/1.jpg);
  border-image-repeat: no-repeat;
  background-size: cover;
}

.baeredygtig_udvikling {
  background-image: url(omraade/2.jpg);
  border-image-repeat: no-repeat;
  background-size: cover;
}

.verdensmaalsskoler {
  background-image: url(omraade/3.jpg);
  border-image-repeat: no-repeat;
  background-size: cover;
}*/


	</style>
</head>

<body>

		<section class="sektion1">
			<img src="logo_unesco.png" alt="logo">
			<p>På siden findes projekter indsendt af danske UNESCO verdensmålskoler. Projekterne er alle med udgangspunkt i FNs 17 verdensmål og kan bruges som inspiration og motivation samt udgøre grundlaget for eksempelvis skoleprojekter, undersøgelser eller lignende.</p>
		</section>
				<h1 class="overskrift"></h1>
			
			 <!--de 3 filtrerings boxe til OMRÅDER-->
				<nav id="filtrering">
				<button data-omrde="alle">Alle</button>
				</nav>
			 <!--de 3 filtrerings knapper med UDANNELSES TRIN, FAGOMRÅDE og VERDENSMÅLSKOLER-->
			<!--<div>
      			<nav id="banner1">
       			 vi definere alle med klassen valgt, da den ikke er del af io
       			 <button data-projekter="alle" class="valgt">Alle projekter</button>
        		 <button data-projekter="uddannelses_trin" class="uddannelses_trin">Uddannelses trin</button>
        		 <button data-projekter="fagomraade" class="fagomraade">Fagområde</button>
				 <button data-projekter="verdensmaal" class="verdensmaal">17 Verdensmål</button>
      			</nav>
   			 </div>-->
		<section id="sektion2">
			<template>
				<!--<article class="a1">-->
				<h3 class="overskrift_1"></h3>
				<h4 class="trin"></h4>
				<p class="kort_beskrivelse"></p>
				<img class="billede"src="" alt="">
				<!--</article>-->
				<h3 class="alle"></h3> <!-- det er til nulstil søgning -->
			</template>
		</section>
	

		<section id="liste"> <!-- liste over de projekter der passer passer til filtreringen -> skal ligges i template -->
			<img src="" alt="">
			<h3 class="projekt_navn"></h3>
			<h4 class="klassetrin_projekt"></h4>
			<p class="kort_beskrivelse_projekt"></p>
		</section>
	<!-- bruges til at ryge til toppen-->
		<div class="back_to_top">
			<a href="#sektion2">Tilbage til top</a>
		</div>
		

    <script>
console.log("start");
//nøgle
const dbUrl = "http://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/projekter";
//url for at få fat i kategorier
const catUrl = "http://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/omrde";
let projekter;
let omrde;
let filterProjekt;
let filter = "alle";
//loader dommen før funktionen start kommer
document.addEventListener("DOMContentLoaded", start);

//definere funktionen start, som definere at man klikker på knap
function start() {
hentdata();
}

//henter data fra json io
async function hentdata() {
const data = await fetch(dbUrl);
const catdata = await fetch(catUrl);
projekter = await data.json();
omrde = await catdata.json();
console.log(omrde);
visProjekter();
 opretknapper();
}

//definere at container er section og at temp er template
const container = document.querySelector("section");
const temp = document.querySelector("template");


function opretknapper(){

omrde.forEach(cat =>{
document.querySelector("#filtrering").innerHTML += `<button class="filter" data-tur="${cat.id}">${cat.name}</button>`
})

addEventListenerToButton();
}

function addEventListenerToButton(){
document.querySelectorAll("#filtrering button").forEach(elm =>{
elm.addEventListener("click", filtrering)
})
}

function filtrering(){
filterProjekt = this.dataset.projekt;
console.log(filterProjekt)

visProjekter();
}

function visProjekter() {
console.log("visProjekter");
// let container = document.querySelector()
container.innerHTML = "";
if (filterProjekt == "alle" || projekt.omrde.includes(parseInt(filterProjekt))){
const klon = temp.cloneNode(true).content;
klon.querySelector(".overskrift_1").textContent = projekt.overskrift_1;
klon.querySelector(".kort_beskrivelse").textContent = projekt.kort_beskrivelse;
klon.querySelector(".trin").textContent = projekt.trin;
klon.querySelector(".billede").src = projekt.billede.guid;
/*___kald til at åbne i ny side_____*/
klon.querySelector("article").addEventListener("click", () => {
location.href = projekt.link;})
/*klon.querySelector("img").src = "medium/" + kategori.md;*/
container.appendChild(klon);
}
});
}
  getJson();

    </script>
</body>
</html>
<?php get_footer();





