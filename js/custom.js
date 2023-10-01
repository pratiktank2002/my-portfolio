
//
$(document).ready(function() {
			$('#fullpage').fullpage({
				'verticalCentered': false,
				'scrollingSpeed': 600,
				'autoScrolling': false,
				'css3': true,
				'navigation': true,
				'navigationPosition': 'right',
			});
		});

// horizontal Scrolling
// $(document).ready(function() {
// 	$('#fullpage').fullpage({
// 	  verticalCentered: false,
// 	  scrollingSpeed: 600,
// 	  autoScrolling: false,
// 	  css3: true,
// 	  navigation: true,
// 	  navigationPosition: 'right',
// 	  controlArrows: true, // Disable control arrows
// 	  slidesNavigation: false, // Enable navigation dots for slides
// 	  loopHorizontal: true // Enable horizontal loop
// 	});
//   });
  
// wow
$(function()
{
    new WOW().init();
    $(".rotate").textrotator();
})

// text zoom on project title
const heading = document.getElementById('myHeading');
// const heading = document.getElementsByClassName('myHeading');
const characters = heading.innerText.split('');

heading.innerHTML = characters.map(char => `<span>${char}</span>`).join('');

heading.addEventListener('mouseover', function(event) {
  if (event.target.tagName === 'SPAN') {
    event.target.style.transform = 'scale(1.3)';
  }
});

heading.addEventListener('mouseout', function(event) {
  if (event.target.tagName === 'SPAN') {
    event.target.style.transform = 'scale(1)';
  }
});


//======================= show current day
// Get the current date
var currentDate = new Date();

// Get the day index (0-6) of the current date
var dayIndex = currentDate.getDay();

// Define an array of day names
var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

// Get the day name based on the day index
var dayName = dayNames[dayIndex];

// Update the content of the <span> element with the day name
document.getElementById("dayName").textContent = dayName;

// alert time-out
$(document).ready(function() {
	var duration = 1000;
	$('#alert').delay(duration).fadeOut("slow");
});

// ===========for zomm on progress bar
$(document).ready(function() {
	$('.prog').hover(
	  function() {
		$(this).addClass('zoom');
		// console.log("zoom");
	  },
	  function() {
		$(this).removeClass('zoom');
	  }
	);
});
  
// zoom on individual char
// $(document).ready(function() {
// 	$('.zoomText').hover(
// 	  function() {
// 		var text = $(this).text();
// 		var zoomedText = '';
  
// 		for (var i = 0; i < text.length; i++) {
// 		  zoomedText += '<span> '+ ' ' + text[i] + ' ' + ' </span>';
// 		}
  
// 		$(this).html(zoomedText);
// 		$(this).find('span').addClass('zoom');
// 	  },
// 	  function() {
// 		$(this).find('span').removeClass('zoom');
// 	  }
// 	);
// });

// function addZoomEffectToClass(className) {
// 	const elements = document.getElementsByClassName(className);
	
  
// 	Array.from(elements).forEach(element => {
// 	  const text = element.textContent;
// 	  element.innerHTML = '';
  
// 	  for (let i = 0; i < text.length; i++) {
// 		const char = text[i];
// 		const span = document.createElement('span');
// 		span.textContent = char;
// 		span.style.transition = 'transform 0.3s ease-in-out';
  
// 		span.addEventListener('mouseover', function() {
// 		  this.style.transform = 'scale(1.2)';
// 		});
		
  
// 		span.addEventListener('mouseout', function() {
// 		  this.style.transform = 'scale(1)';
// 		});
  
// 		element.appendChild(span);
// 	  }
// 	});
// }
  
// // Call the function with the class name
// addZoomEffectToClass('notzoomtext');
  
  


// clck to copy numver to clipboard
document.getElementById("phoneNumber").addEventListener("click", function() {
	var phoneNumber = document.getElementById("phoneNumber").innerText.trim();
	var title = document.getElementsByTagName("title").innerText
  
	navigator.clipboard.writeText(phoneNumber).then(
		title = "number copyid",
		console.log(title)
	)

});
// Copy email to clipboard
document.getElementById("EmailId").addEventListener("click", function() {
	var EmailId = document.getElementById("EmailId").innerText.trim();
	var title = document.getElementsByTagName("title").innerText
  
	navigator.clipboard.writeText(EmailId).then(
		console.log("email copied")
	)

});

// form outline opacity