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
	.filtrering_box img:hover{
		max-width:70%;
		box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
	}
	.filtrering_box button{
		background-color: rgb(255,255,255);
		max-width:70%;
	}
	.filtrering_box:hover{
		background-color: rgb(255,252,245);
	}
/* ________________________FOR MOBIL________________________ */
@media only screen and (max-width: 600px) {
	.filtrering_box img{
		max-width:90%;
	}
h1 {
text-align:center;
font-family: industry-inc-base, sans-serif;
font-weight: 400;
font-style: normal;
font-size: 1rem;
}

h2 {
text-align:center;
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 0.9rem;
}

h3 {
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 0.8rem;
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
text-align: justify;
/* word-break: normal;*/
hyphens: auto;
word-break: break-all; 
}

button, input, select, optgroup, textarea {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;
font-size: 0.6rem;
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
.text_start {
	display:flex;
	justify-content:center;
	margin:10px;
	padding:10px;
}
.filtrering_box {
	display:flex;
	justify-content: center;
	flex-flow: wrap;
	overflow-x: auto;
	margin:5px;
}
footer { 
	padding: 20px;
}
}
/* ________________________FOR SKÆRM________________________ */
@media only screen and (min-width: 600px) {
.filtrering_box img{
		max-width:70%;
}
h1 {
text-align:center;
font-family: industry-inc-base, sans-serif;
font-weight: 400;
font-style: normal;
font-size: 1.2rem;
}

h2 {
text-align:center;
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 1rem;
}

h3 {
font-family: nunito, sans-serif;
font-weight: 900;
font-style: normal;
font-size: 1rem;
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
}

button {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;
}
.text_start {
	display:flex;
	justify-content:center;
	margin:50px;
	padding:30px;
}
button, input, select, optgroup, textarea {
font-family: nunito, sans-serif;
font-weight: 600;
font-style: normal;
font-size: 0.8rem;
}
.filtrering_box {
	display:flex;
	justify-content: center;
	flex-flow: wrap;
	overflow-x: auto;
	margin:30px;
}

}
/*_______________button styling___________________ */
button {
	background-color: rgb(229,213,178);
	color: rgb(108,108,108);
}
button filter:hover{
	background-color: rgb(206,185,139);
	color: rgb(100,100,100);
}
article {
	background-color: rgb(250,247,240);
	margin: 50px;
}
.sektion2 {
	display: grid;
    grid-template-columns: 1fr 1fr;
    padding: 30px;
    margin: 40px;
}
article {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	gap: 30px;
	padding: 30px;
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
/*__________________SLIDER SLUT_______________________*/
.logo_projekter {
  display: flex;
  justify-content: space-evenly;
  padding: 20px;
  margin: 20px;
}
.logo_projekter img {
	max-width: 30%;
}
select {
	background-color:#E5D5B2;
	color: rgb(108,108,108);
	border-radius: 200px;
	border: none;
	padding:5px;
	margin:5px;
	gap:5px;
}

#filtrering {
	display:flex;
	justify-content: center;
}
.imprint {
	display :none;
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
.back_to_top a {
	font-family: nunito, sans-serif;
	font-weight: 900;
	font-style: normal;
	font-size: 1rem;
	color: rgb(108,108,108);
	padding: 10px;
}
.back_to_top a:hover {
  color:rgb(206,185,139);
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
<header>
		<!--LOGO-->
		<div class="logo_projekter">
			<img src="<?php echo get_stylesheet_directory_uri()?>/logo_unesco.png" alt="logo">
		</div>
		<!--PROJEKT-BESKRIVELSE-->
		<section class="sektion1">
			<h1>PROJEKTER</h1>
			<div class="text_start">
			<p class="projektside_beskrivelse">På siden findes projekter indsendt af danske UNESCO verdensmålskoler. Projekterne er alle med udgangspunkt i FNs 17 verdensmål og kan bruges som inspiration og motivation samt udgøre grundlaget for eksempelvis skoleprojekter, undersøgelser eller lignende.</p>
			</div>
		</section>
		<!--de 3 filtrerings boxe til OMRÅDER-->

		<div class="filtrering_box">
			<nav id="filtrering">
			<button data-projekt="alle"></button>
			
			</nav>
		</div>
</header>
<main>	

		<!-- _____________de 3 filtrerings boxe til fag, trin og mål______________-->	
		<div class="filtrering_box">
			<!--UDDANNELSES TRIN-->
			<label for="filtrering1"></label>
			<select name="filtrering1" id="filtrering1" data-projekt="alle"><option value="alle">Uddannelses trin</option></select>
			<!--FAGOMRÅDE-->
			<label for="filtrering2"></label>
			<select name="filtrering2" id="filtrering2" data-projekt="alle"><option value="alle">Fagområde</option></select>
			<!--VERDENSMÅL-->
			<label for="filtrering3"></label>
			<select name="filtrering3" id="filtrering3" data-projekt="alle"><option value="alle">Verdensmål</option></select>
		</div>
		<h1 class="overskrift"></h1>
		<section id="sektion2">
			<template>
				<article>
				<div class="textbox">
				<h3 class="overskrift_2"></h3>
				<h4 class="trin"></h4>
				<p class="kort_beskrivelse"></p>
				</div>
				<div class="billedebox">
				<img class="billede"src="" alt="">
				</div>
			</article>
			<h3 class="alle"></h3> <!-- det er til nulstil søgning -->
			</template>
			<section class="projektcontainer">

			</section>
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

	</main>	
<script>
"use strict";
let projekter;
let categories;
let filterProjekt = "alle";
let filterUdd = "alle"
let filterFag = "alle"
let filterVer = "alle"
//______________________________O M R Å D E R__________________________________________________________
//nøgle
const dbUrl = "https://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/projekt";
// //url for at få fat i kategorier
const catUrl = "https://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/omraade";



async function getJson() {
const data = await fetch(dbUrl);
const catdata = await fetch(catUrl);
projekter = await data.json();
categories = await catdata.json();
console.log(categories);
visProjekter();
opretKnapper();
}

function opretKnapper() {
categories.forEach(cat => {
// document.querySelector("#filtrering").innerHTML += `<button class="filter" data-projekt="${cat.id}">${cat.name}</button>`
document.querySelector("#filtrering").innerHTML += `<button class="filter" data-projekt="${cat.id}"><img src="${cat.billede_g.guid}"></button>`
})

addEventListenersToButtons();
}

function addEventListenersToButtons() {
document.querySelectorAll("#filtrering button").forEach(elm =>{
elm.addEventListener("click", filtrering);
})

};

function filtrering (){
filterProjekt = this.dataset.projekt;
console.log(filterProjekt);

visProjekter();
}

function visProjekter() {
	console.log(projekter);
	let temp = document.querySelector("template");
	let container = document.querySelector(".projektcontainer")
	container.innerHTML = "";
	projekter.forEach(projekt => {
		//Vha. if sætningen tager vi fat i kategorien område og vha. && siger vi område OG uddannelsestrin
		//Med denne kode skal man kun have én funktion til alle kategorier, hvor man siger en kategori og en ny kategori
		if( (filterProjekt == "alle" || projekt.omraade.includes(parseInt(filterProjekt)) )&&(  filterUdd=="alle"|| projekt.uddannelsestrin.includes(parseInt(filterUdd)))&&(  filterFag=="alle"|| projekt.fagomraade.includes(parseInt(filterFag)))&&(  filterVer=="alle"|| projekt.verdensmaal.includes(parseInt(filterVer)))){
		const klon = temp.cloneNode(true).content;
		/*klon.querySelector(".overskrift").textContent = projekt.overskrift; har vi brug for den??_*/
		klon.querySelector(".overskrift_2").innerHTML = projekt.overskrift;
		klon.querySelector(".overskrift_2").innerHTML = projekt.overskrift_2;
		klon.querySelector(".kort_beskrivelse").innerHTML = projekt.kort_beskrivelse;
		klon.querySelector(".trin").innerHTML = projekt.trin;
		klon.querySelector(".billede").src = projekt.billede.guid;
		klon.querySelector("article").addEventListener("click", () => {
		location.href = projekt.link;})
		container.appendChild(klon);
		}
	})

}
// //__________________________U D D A N N E L S E S __ T R I N______________________________________________________________
// //nøgle er øverst ved område
// // //url for at få fat i kategorier
let uddannelse;
const uddUrl = "https://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/uddannelsestrin";

getUddannelsesJson();

async function getUddannelsesJson() {
	const udddata = await fetch(uddUrl);
	uddannelse = await udddata.json();
	console.log("UDDANNELSE",uddannelse);
	//visProjekter();
	opretUknap();
}

function opretUknap() {
	uddannelse.forEach(udd => {

document.querySelector("#filtrering1").innerHTML += `<option value="${udd.id}">${udd.name}</option>`
	//document.querySelector("#filtrering1").innerHTML += `<button class="filter" data-projekt="${udd.id}">${udd.name}</button>`
})

addEventListenersToDropDowns();
}

function addEventListenersToDropDowns() {
	document.querySelector("#filtrering1").addEventListener("change",filtrering1_change)

};
function filtrering1_change(evt){
	console.log("FILTRERING1", evt.target.value);
	filterUdd= evt.target.value;
	visProjekter();
}


// //__________________________F A G O M R Å D E______________________________________________________________
// //nøgle er øverst ved område
// // //url for at få fat i kategorier

let fagomraade;
const fagUrl = "https://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/fagomraade";

getFagomraadeJson();

async function getFagomraadeJson() {
	const fagdata = await fetch(fagUrl);
	fagomraade = await fagdata.json();
	console.log("Fagomraade",fagomraade);
	//visProjekter();
	opretFknap();
}

function opretFknap() {
	fagomraade.forEach(fag => {

document.querySelector("#filtrering2").innerHTML += `<option value="${fag.id}">${fag.name}</option>`
	//document.querySelector("#filtrering1").innerHTML += `<button class="filter" data-projekt="${udd.id}">${udd.name}</button>`
})

addEventListenersToDropDowns2();
}

function addEventListenersToDropDowns2() {
	document.querySelector("#filtrering2").addEventListener("change",filtrering2_change)

};
function filtrering2_change(evt){
	console.log("FILTRERING2", evt.target.value);
	filterFag= evt.target.value;
	visProjekter();
}

// //__________________________V E R D E N S M Å L______________________________________________________________
// //nøgle er øverst ved område
// // //url for at få fat i kategorier

let verdensmaal;
const verUrl = "https://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/verdensmaal";

getVerdensmaalJson();

async function getVerdensmaalJson() {
	const verdata = await fetch(verUrl);
	verdensmaal = await verdata.json();
	console.log("verdensmaal",verdensmaal);
	//visProjekter();
	opretVknap();
}

function opretVknap() {
	verdensmaal.forEach(ver => {

document.querySelector("#filtrering3").innerHTML += `<option value="${ver.id}">${ver.name}</option>`
	//document.querySelector("#filtrering1").innerHTML += `<button class="filter" data-projekt="${udd.id}">${udd.name}</button>`
})

addEventListenersToDropDowns3();
}

function addEventListenersToDropDowns3() {
	document.querySelector("#filtrering3").addEventListener("change",filtrering3_change)

};
function filtrering3_change(evt){
	console.log("FILTRERING3", evt.target.value);
	filterVer= evt.target.value;
	visProjekter();
}
// function filtrering1 (){
// 	filterUdd = this.dataset.projekt;
// 	console.log(filterProjekt);

	
// }

//function visProjekter() {
// console.log(projekter);
// let temp = document.querySelector("template");
// let container = document.querySelector(".projektcontainer")
// container.innerHTML = "";
// projekter.forEach(projekt => {
// if( filterProjekt == "alle" || projekt.uddannelsestrin.includes(parseInt(filterProjekt))){
// const klon = temp.cloneNode(true).content;
// klon.querySelector(".overskrift_2").innerHTML = projekt.overskrift_2;
// klon.querySelector(".kort_beskrivelse").innerHTML = projekt.kort_beskrivelse;
// klon.querySelector(".trin").innerHTML = projekt.trin;
// klon.querySelector(".billede").src = projekt.billede.guid;
// klon.querySelector("article").addEventListener("click", () => {
// location.href = projekt.link;})
// container.appendChild(klon);
// }
// })

// }


// //__________________________FAG OMRAADE______________________________________________________________
// //nøgle er øverst ved område
// //url for at få fat i kategorier
// const fagUrl = "https://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/fagomraade";



// async function getJson() {
// const fagdata = await fetch(fagUrl);
// fagomraade = await fagdata.json();
// console.log(fagomraade);
// visProjekter();
// opretFagknap();
// }

// function opretFagknap() {
// fagomraade.forEach(fagom => {
// document.querySelector("#filtrering2").innerHTML += `<button class="filter" data-projekt="${fagom.id}">${fagom.name}</button>`
// })

// addEventListenersToButtons();
// }

// function addEventListenersToButtons() {
// document.querySelectorAll("#filtrering2 button").forEach(elm =>{
// elm.addEventListener("click", filtrering2);
// })

// };

// function filtrering2 (){
// filterProjekt = this.dataset.projekt;
// console.log(filterProjekt);

// visProjekter();
// }

// function visProjekter() {
// console.log(projekter);
// let temp = document.querySelector("template");
// let container = document.querySelector(".projektcontainer")
// container.innerHTML = "";
// projekter.forEach(projekt => {
// if( filterProjekt == "alle" || projekt.fagomraade.includes(parseInt(filterProjekt))){
// const klon = temp.cloneNode(true).content;
// klon.querySelector(".overskrift_2").innerHTML = projekt.overskrift_2;
// klon.querySelector(".kort_beskrivelse").innerHTML = projekt.kort_beskrivelse;
// klon.querySelector(".trin").innerHTML = projekt.trin;
// klon.querySelector(".billede").src = projekt.billede.guid;
// klon.querySelector("article").addEventListener("click", () => {
// location.href = projekt.link;})
// container.appendChild(klon);
// }
// })

// }

getJson();



		 </script>
	</body>
</html>
<?php get_footer();





