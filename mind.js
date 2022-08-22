setInterval(mytimer,1000);
let clock = document.getElementsByClassName('clock');
function mytimer(){
	let date = new Date();
	let hour = date.getHours();
	let min = date.getMinutes();
	let sec = date.getSeconds();
	let fullTime = hour + ":" + min + ":" + sec;
	clock[0].innerHTML = fullTime;
	clock[0].style.fontSize = "10rem";
	clock[0].style.fontFamily = "digital-7";

}