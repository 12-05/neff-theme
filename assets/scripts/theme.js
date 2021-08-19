document.getElementById("hamburger").addEventListener("click", navStatus);
document.getElementById("hamburger-close").addEventListener("click", navStatus);

// Prüfen ob die Navigation geöffnet oder geschlossen ist

function navStatus() {
	if (document.body.classList.contains("hamburger-active")) {
		navClose();
	} else {
		navOpen();
	}
}

// Wenn die Navi geschlossen wird, Klasse für »offen« entfernen

function navClose() {
	document.body.classList.remove("hamburger-active");
}

// Wenn die Navi geöffnet wird, Klasse für »geschlossen« entfernen

function navOpen() {
	document.body.classList.add("hamburger-active");
}

mybutton = document.getElementById("scrollUp");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
	scrollFunction();
};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
