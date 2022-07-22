// Whenever the page is scrolled, a function is called
window.onscroll = function() {
	scrollFunction();
};

// Declaration of scrollFunction
function scrollFunction() {
	if (document.documentElement.scrollTop > 50) {
		document.getElementById('header').style.background = '#fff';
		//Sets a white background when the scroll position from top is 50
	} else {
		document.getElementById('header').style.background = 'none';
		//background set to normal
	}
}
// End of scrollFunction

// Declaration of openTab function with two parameters
// Used in Blog, CV and Research to change contents dynamically
// Parameter 1: evt- It is an Event object, and it represents the event being fired which caused your function to be executed.
// Parameter 2: tabName - References to id of the contents to change thier display properties
function openTab(evt, tabName) {
	// Declaration of variables
	var i, tabcontent, tablinks;
	// An array of tabcontent is created
	tabcontent = document.getElementsByClassName('tabcontent');
	// Goes through every element of array in a loop
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = 'none';
		// To set the display style to none everytime a button is clicked
	}
	tablinks = document.getElementsByClassName('tablinks');
	// Goes through every element of array in a loop
	for (i = 0; i < tablinks.length; i++) {
		// An array of tablinks is created
		tablinks[i].className = tablinks[i].className.replace(' active', '');
		//To replace the active class property of a button to blank everytime a button is clicked
	}
	document.getElementById(tabName).style.display = 'block';
	// To display the contents of div referenced by tabName
	evt.currentTarget.className += ' active';
	// To add active class to the button which was clicked
}
// End of openTab



