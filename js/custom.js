// Home Page Accordian
var screeSize = false; 
const windoSize = window.innerWidth               
// $(window).on('resize', function(){
//     var win = $(this); //this = window
//     if (win.height() >= 820) { /* ... */ }
    
// }); 

if (windoSize < 680) { 
    screeSize = true
}else{
    screeSize = false
}

function toggleAccordion(sectionNumber) {
    const accordionSection = document.getElementById(`accordion-section-${sectionNumber}`);
    const accordionLabel = document.getElementById(`accordion-label-${sectionNumber}`);
    const arrowUp = document.getElementById(`arrow-up-${sectionNumber}`);
    const arrowDown = document.getElementById(`arrow-down-${sectionNumber}`);

    accordionSection.style.maxHeight = accordionSection.style.maxHeight ? null : "0";
    arrowUp.classList.toggle('hidden');
    arrowDown.classList.toggle('hidden');
    accordionLabel.classList.toggle('text-dark-orange');
  }


  /* For Mobile Menu */
document.addEventListener("DOMContentLoaded", function() {
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenuModal = document.getElementById('mobileMenuModal');
  const modalOverlay = document.querySelector('#mobileMenuModal .bg-black');

  menuToggle.addEventListener("click", function() {
    mobileMenuModal.classList.toggle("hidden");
  });

  modalOverlay.addEventListener("click", function(e) {
    if (e.target === modalOverlay) {
      mobileMenuModal.classList.add("hidden");
    }
  });




  //Card Logic
  
  const cards = document.querySelectorAll('.card');
  let leftPositions = ['50px', '90px', '120px','800px', '1450px', '2100px'];
  if(screeSize){
    leftPositions = ['10px', '600px', '800px','1000px', '1200px', '1400px'];
  }else{
    leftPositions = ['50px', '90px', '120px','800px', '1450px', '2100px'];
  }
  let originalLeftPostions = [...leftPositions];
  let rotateCards = ['-9deg', '-7deg', '-4deg','-2deg', '0deg']

  function updateCardPositions() {
      cards.forEach((card, index) => {
          card.style.left = leftPositions[index];
          if(card.style.left != originalLeftPostions[0] && 
            card.style.left != originalLeftPostions[1] && 
            card.style.left != originalLeftPostions[2] ) {

            card.style.rotate = rotateCards[rotateCards.length-1]  
            cards[0].style.rotate = rotateCards[rotateCards.length-1]
          }
          else {
            card.style.rotate = rotateCards[index]
            
          }

          if(index === 1 && cards[1].style.left === originalLeftPostions[3] 
            || cards[2].style.left === originalLeftPostions[4]) {
            cards[1].style.left = "700px"
            cards[2].style.left = "1350px"
          }
      });

      if(cards[4].style.left === originalLeftPostions[2]) {
        document.getElementById('prevButton').disabled = true;
      }
      else {
        document.getElementById('prevButton').disabled = false;
      }

      if(cards[1].style.left != originalLeftPostions[1]
         && cards[1].style.left != originalLeftPostions[2]
          && cards[1].style.left != originalLeftPostions[0]) {
        document.getElementById('nextButton').disabled = true;
      }
      else {
        document.getElementById('nextButton').disabled = false;
      }
  }

  document.getElementById('nextButton').addEventListener('click', () => {
    console.log("next", leftPositions)
      // Move the fourth card to the third card's position
      const fourthCard = leftPositions[3];
      leftPositions[3] = leftPositions[4];
      leftPositions[1] = leftPositions[2];
      leftPositions[4] = leftPositions[5];
      leftPositions[2] = fourthCard;
      leftPositions[5] = originalLeftPostions[5]

      if( cards[4].style.left === originalLeftPostions[2] || cards[4].style.left === originalLeftPostions[0]) {
        leftPositions[5] = originalLeftPostions[4]
        leftPositions[4] = originalLeftPostions[3]
        leftPositions[3] = originalLeftPostions[2]
        leftPositions[2] = originalLeftPostions[1]
      }
      

      updateCardPositions();
  });

  document.getElementById('prevButton').addEventListener('click', () => {
    console.log("prev", leftPositions)
    const initailCard = leftPositions[0];
    const firstCard = leftPositions[1];
    const secondCard = leftPositions[2];
    const thirdCard = leftPositions[3];
      leftPositions[1] = originalLeftPostions[0];
      leftPositions[2] = firstCard;
      leftPositions[3] = secondCard;
      leftPositions[4] = thirdCard;

    updateCardPositions();
  });

  updateCardPositions();



  //How It Works Card Logic

  //gsap.registerPlugin(ScrollTrigger);

//const spacer = -500;


//let howItWorksCards = gsap.utils.toArray(".how-it-works-card");

// Debug: Log the zIndex of the second card
// if (howItWorksCards[1]) {
//   console.log(howItWorksCards[1].style.zIndex);
// }

// gsap.fromTo(
//   ".how-it-works-card:not(:first-child)",
//   {
//     x: (index) =>  window.innerWidth + spacer, // Initial position off-screen
//     rotate: 0,
//   },
//   {
//     x: (index) => (index + 1),  // Final position on-screen
//     stagger: 0.5,
//     rotate: 0,
//     scrollTrigger: {
//       trigger: '.how-it-works-section',  // Trigger element
//       pin: ".how-it-works-section",     // Pin the entire section
//       pinSpacing: false,                // Disable automatic pinSpacing adjustment
//       scrub: true,                      // Smooth scrubbing effect
//       start: "top 50px",        // Start animation when top of section is 100px from top of viewport
//       end: "+=1000",                    // End animation 1000px after start
//       invalidateOnRefresh: true         // Invalidate trigger on refresh
//     }
//   }
// );

}); 

// Dropdown Menu

document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach(dropdown => {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    toggle.addEventListener("click", function (e) {
      e.stopPropagation();
      menu.classList.toggle("show");
    });

    document.addEventListener("click", function () {
      menu.classList.remove("show");
    });

    menu.addEventListener("click", function (e) {
      e.stopPropagation();
    });
  });
});




jQuery(document).ready(function(){
  jQuery('.slick-slider-most-blog').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    prevArrow: jQuery('.blog-prev-arrow'),
    nextArrow: jQuery('.blog-next-arrow'),
  responsive: [
      {
          breakpoint: 768, 
          settings: {
              slidesToShow: 1 
          }
      }
  ]
  });

  


});

// Search Skill when someone click on search box on Homepage
function filterSkills() {
  const input = document.getElementById('searchInput');
  const filter = input.value.toLowerCase();
  const skillsContainer = document.getElementById('skillsContainer');
  const skillDivs = skillsContainer.getElementsByClassName('flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border');
  const displayedSkills = new Set();

  for (let i = 0; i < skillDivs.length; i++) {
    const skillText = skillDivs[i].getElementsByTagName('h4')[0];
    const txtValue = skillText.textContent || skillText.innerText;
    if (txtValue.toLowerCase().indexOf(filter) > -1 && !displayedSkills.has(txtValue.toLowerCase())) {
      skillDivs[i].style.display = "";
      displayedSkills.add(txtValue.toLowerCase());
    } else {
      skillDivs[i].style.display = "none";
    }
  }
}

// Select/Unselect Skill
function toggleSkill(skillElement) {
  const isSelected = skillElement.classList.toggle('skill-selected');
  const crossIcon = skillElement.querySelector('svg');
  const skillName = skillElement.querySelector('h4').textContent.trim();

  if (isSelected) {
    addToInput(skillName);
  } else {
    removeFromInput(skillName);
  }

  if (crossIcon) {
    crossIcon.classList.toggle('hidden', !isSelected);
  }
}

// Add skill to input box
function addToInput(skillName) {
  const inputBox = document.getElementById('skillsInput');
  const currentValue = inputBox.value.trim();
  const newValue = currentValue.length === 0 ? skillName : currentValue + ', ' + skillName;
  inputBox.value = newValue;
}

// Remove skill from input box
function removeFromInput(skillName) {
  const inputBox = document.getElementById('skillsInput');
  let currentValue = inputBox.value.trim();
  currentValue = currentValue.replace(new RegExp(skillName + ',?'), ''); // Remove the skill from input
  inputBox.value = currentValue.trim();
}

function deselectSkill(event) {
  event.stopPropagation(); // Prevents triggering the skill toggle again
  const skillElement = event.currentTarget.parentNode;
  skillElement.classList.remove('skill-selected');
  const skillName = skillElement.querySelector('h4').textContent.trim();
  removeFromInput(skillName);
  event.currentTarget.classList.add('hidden');
}

// Counter function
function animateCounter(element, start, end, duration, suffix = '') {
  let startTime = null;

  const step = (timestamp) => {
      if (!startTime) startTime = timestamp;
      const progress = Math.min((timestamp - startTime) / duration, 1);
      const value = Math.floor(progress * (end - start) + start);
      element.textContent = value.toLocaleString() + suffix;
      if (progress < 1) {
          window.requestAnimationFrame(step);
      }
  };

  window.requestAnimationFrame(step);
}

// Intersection Observer to trigger the animation
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
      if (entry.isIntersecting) {
          const element = entry.target;
          const targetValue = parseInt(element.getAttribute('data-target'));
          const textContent = element.textContent.trim();

          let suffix = '';
          if (textContent.includes('+')) {
              suffix = '+';
          } else if (textContent.includes('%')) {
              suffix = '%';
          } else if (textContent.includes('£')) {
              suffix = '£' + targetValue;
          }

          animateCounter(element, 0, targetValue, 2000, suffix);
          observer.unobserve(element); // Unobserve the element after animation starts
      }
  });
}, {
  threshold: 0.5 // Adjust this threshold as needed
});

// Observe each counter element
document.querySelectorAll('[data-target]').forEach(element => {
  observer.observe(element);
});

var interval;
var counter = 0;
function sliderFunction(){
 var interval = setInterval(function(){
      if(counter < 100){
        counter += 1;
        const width = `${counter}%`
        jQuery('#progress').css("width", width);
        jQuery('#range').val(counter);
        let changeValue = `$ ${counter*20}`
        jQuery('#price-value').text(changeValue);
        
        
      }else{
        counter = 0;
        jQuery('#progress').css("width", 0);
        jQuery('#range').val(0);
        let changeValue = `$ 0`
        jQuery('#price-value').text(changeValue);
        clearInterval(interval);
        sliderFunction()
      }
  }, 50);
}
sliderFunction()



jQuery(function () { // wait for document ready
  // init


               
var controller = new ScrollMagic.Controller();

// define movement of panels

var wipeAnimation;

if(!screeSize){
    console.log('screeSize', screeSize)
    wipeAnimation = new TimelineMax()
                    .fromTo("section.panel.white", 1, {x: "5%"}, {x: "5%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.blue", 1, {x: "85%"}, {x: "10%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.turqoise", 1, {x: "90%"}, {x: "15%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.green", 1, {x:  "95%"}, {x: "20%", ease: Linear.easeNone})  // in from right
}else{
    wipeAnimation = new TimelineMax()
                    .fromTo("section.panel.white", 1, {y: "5%"}, {y: "0%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.blue", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.turqoise", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.green", 1, {y:  "100%"}, {y: "0%", ease: Linear.easeNone})  // in from right
}

// create scene to pin and link animation
new ScrollMagic.Scene({
        triggerElement: "#pinContainer",
        triggerHook: "onLeave",
        duration: "300%",
        offset:-50

    })
    .setPin("#pinContainer")
    .setTween(wipeAnimation)
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);

    // new ScrollMagic.Scene({
    // triggerElement: ".main-box",
    // duration: '85%' // Duration can be different from Masthead
    // })
    // .setPin(".box-1")
    // .addIndicators({
    // name: ".box-1 Pin",
    // colorEnd: "dodgerblue"
    // })
    // .addTo(controller);  
});



jQuery('.silkSlide').slick({
  mobileFirst: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: false,
  variableWidth: true,
  focusOnSelect: true,
  responsive: [
        {
          breakpoint: 1024,
          settings: {
              mobileFirst: true,
              infinite: true,
              speed: 300,
              slidesToShow: 1,
              centerMode: false,
              variableWidth: true,
              focusOnSelect: true

          }
        }
      ]
});


setTimeout(() =>{
  $('.silkSlide').slick('unslick');
}, 200)