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
  
  // const cards = document.querySelectorAll('.card');
  // let leftPositions = ['50px', '90px', '120px','800px', '1450px', '2100px'];
  // if(screeSize){
  //   leftPositions = ['10px', '600px', '800px','1000px', '1200px', '1400px'];
  // }else{
  //   leftPositions = ['50px', '90px', '120px','800px', '1450px', '2100px'];
  // }
  // let originalLeftPostions = [...leftPositions];
  // let rotateCards = ['-9deg', '-7deg', '-4deg','-2deg', '0deg']

  // function updateCardPositions() {
  //     cards.forEach((card, index) => {
  //         card.style.left = leftPositions[index];
  //         if(card.style.left != originalLeftPostions[0] && 
  //           card.style.left != originalLeftPostions[1] && 
  //           card.style.left != originalLeftPostions[2] ) {

  //           card.style.rotate = rotateCards[rotateCards.length-1]  
  //           cards[0].style.rotate = rotateCards[rotateCards.length-1]
  //         }
  //         else {
  //           card.style.rotate = rotateCards[index]
            
  //         }

  //         if(index === 1 && cards[1].style.left === originalLeftPostions[3] 
  //           || cards[2].style.left === originalLeftPostions[4]) {
  //           cards[1].style.left = "700px"
  //           cards[2].style.left = "1350px"
  //         }
  //     });

  //     if(cards[4].style.left === originalLeftPostions[2]) {
  //       document.getElementById('prevButton').disabled = true;
  //     }
  //     else {
  //       document.getElementById('prevButton').disabled = false;
  //     }

  //     if(cards[1].style.left != originalLeftPostions[1]
  //        && cards[1].style.left != originalLeftPostions[2]
  //         && cards[1].style.left != originalLeftPostions[0]) {
  //       document.getElementById('nextButton').disabled = true;
  //     }
  //     else {
  //       document.getElementById('nextButton').disabled = false;
  //     }
  // }

  // document.getElementById('nextButton').addEventListener('click', () => {
  //   console.log("next", leftPositions)
  //     // Move the fourth card to the third card's position
  //     const fourthCard = leftPositions[3];
  //     leftPositions[3] = leftPositions[4];
  //     leftPositions[1] = leftPositions[2];
  //     leftPositions[4] = leftPositions[5];
  //     leftPositions[2] = fourthCard;
  //     leftPositions[5] = originalLeftPostions[5]

  //     if( cards[4].style.left === originalLeftPostions[2] || cards[4].style.left === originalLeftPostions[0]) {
  //       leftPositions[5] = originalLeftPostions[4]
  //       leftPositions[4] = originalLeftPostions[3]
  //       leftPositions[3] = originalLeftPostions[2]
  //       leftPositions[2] = originalLeftPostions[1]
  //     }
      

  //     updateCardPositions();
  // });

  // document.getElementById('prevButton').addEventListener('click', () => {
  //   console.log("prev", leftPositions)
  //   const initailCard = leftPositions[0];
  //   const firstCard = leftPositions[1];
  //   const secondCard = leftPositions[2];
  //   const thirdCard = leftPositions[3];
  //     leftPositions[1] = originalLeftPostions[0];
  //     leftPositions[2] = firstCard;
  //     leftPositions[3] = secondCard;
  //     leftPositions[4] = thirdCard;

  //   updateCardPositions();
  // });

  // updateCardPositions();



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

  jQuery('.logo-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 10,
    slidesToScroll: 3,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
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
  }, 100);
}
sliderFunction()

var controller = new ScrollMagic.Controller();

function homePageAnimation(){

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

              
    
             
}



function aboutUsAnimation(){

  

  const effect1 = new TimelineMax()
    .fromTo("#scroll-effect-1 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-1 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect2 = new TimelineMax()
    .fromTo("#scroll-effect-2 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-2 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start") 
  
  const effect3 = new TimelineMax()
    .fromTo("#scroll-effect-3 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-3 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect4 = new TimelineMax()
    //.fromTo("#scroll-effect-4 .timeline-content-box", 0.4, { y: '40px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-4 p", 0.4, { x: '-200px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-4 img", 0.4, { x: '300px', opacity: 0}, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    
    
  const effect5 = new TimelineMax()
    .fromTo("#scroll-effect-5 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-5 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect6 = new TimelineMax()
    .fromTo("#scroll-effect-6 .btn", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-6 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-6 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect7 = new TimelineMax()
    .fromTo("#scroll-effect-7 .btn", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-7 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-7 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")


  const effect8 = new TimelineMax()
    .fromTo("#scroll-effect-8 .value-item", 0.4, { y: '0px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 .btn", 0.4, { y: '30px',opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 .box-1", 0.4, { x: '300px', opacity: 0.3 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 .box-2", 0.4, { y: '80px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 .box-3", 0.4, { x: '-300px', opacity: 0.3 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-8 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")


  const effect9 = new TimelineMax()
    .fromTo("#scroll-effect-9 p", 0.4, { x: '-200px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-9 .ani-img", 0.4, { x: '300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect10 = new TimelineMax()
    .fromTo("#scroll-effect-10 h1", 0.4, { x: '-300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-10 p", 0.4, { x: '-300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-10 .discount", 0.4, { x: '300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")


  const effect11 = new TimelineMax()
    .fromTo("#scroll-effect-11 .box-1", 0.4, { x: '300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-11 .box-2", 0.4, { x: '-300px', opacity: 0 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-11 h1", 0.4, { y: '40px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-11 p", 0.4, { y: '60px', opacity: 0 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")


  const effect12 = new TimelineMax()
    .fromTo("#scroll-effect-12 .img-1", 0.4, { x: '300px', opacity: 0.3 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-12 .img-2", 0.4, { x: '-300px', opacity: 0.3 }, { x: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-12 .img-3", 0.4, { y: '300px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-12 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-12 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")

  const effect13 = new TimelineMax()
    .fromTo("#scroll-effect-13 .btn", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-13 h1", 0.4, { y: '40px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")
    .fromTo("#scroll-effect-13 p", 0.4, { y: '60px', opacity: 0.3 }, { y: 0, opacity: 1, ease: Power2.EaseInOut }, "start")




    
   
    var change1 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-1" })
              .offset( 0 )
              //.setClassToggle( ".article-2 .card", "is-visible" )
              .setTween(effect1)
              //.addIndicators({ name: 'effect 1' })
              .addTo( controller );

    var change2 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-2" })
              .offset( -300 )
              //.setClassToggle( ".article-2 .card", "is-visible" )
              .setTween(effect2)
              //.addIndicators({ name: 'effect 2' })
              .addTo( controller );
      
    var change3 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-3" })
              .offset( 0 )
              .setTween(effect3)
              //.setClassToggle( ".article-3 .card", "is-visible" )
              //.addIndicators({ name: 'effect 3' })
              .addTo( controller );

    var change4 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-4" })
              .offset( 100 )
              .setTween(effect4)
              //.addIndicators({ name: 'effect 4' })
              .addTo( controller );

    var change5 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-5" })
              .offset( 0 )
              .setTween(effect5)
              //.addIndicators({ name: 'effect 5' })
              .addTo( controller );

    var change6 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-6" })
              .offset( 0 )
              .setTween(effect6)
              //.addIndicators({ name: 'effect 6' })
              .addTo( controller );

    var change7 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-7" })
              .offset( 0 )
              .setTween(effect7)
              //.addIndicators({ name: 'effect 7' })
              .addTo( controller );

    var change8 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-8" })
              .offset( 200 )
              .setTween(effect8)
              //.addIndicators({ name: 'effect 8' })
              .addTo( controller );

    var change9 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-9" })
              .offset( 200 )
              .setTween(effect9)
              //.addIndicators({ name: 'effect 9' })
              .addTo( controller );

    var change10 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-10" })
              .offset( 100 )
              .setTween(effect10)
              //.addIndicators({ name: 'effect 10' })
              .addTo( controller );

    var change11 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-11" })
              .offset( 200 )
              .setTween(effect11)
              //.addIndicators({ name: 'effect 11' })
              .addTo( controller );


    var change12 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-12" })
              .offset( 200 )
              .setTween(effect12)
              //.addIndicators({ name: 'effect 12' })
              .addTo( controller );

    var change13 = new ScrollMagic.Scene({ triggerElement: "#scroll-effect-13" })
              .offset( 200 )
              .setTween(effect13)
              //.addIndicators({ name: 'effect 13' })
              .addTo( controller );


}




function fadeSquares(el1, el2){
  //console.log('working')
  el1.fadeOut(2000, ()=>{
    el1.fadeIn(2000);
  });
}
let el1 = jQuery('.path1');
let el2 = jQuery('#movebox');

setInterval(function (){
  //console.log('timent')
  fadeSquares(el1, el2);
}, 6000)








jQuery('.silkSlide').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  centerMode: false,
  focusOnSelect: true,
  autoplay: true,
  arrows: false,
  dots:false,
  responsive: [
        {
          breakpoint: 1024,
          settings: {
              infinite: true,
              speed: 300,
              slidesToShow: 5,
              slidesToScroll: 1,
              centerMode: false,
              variableWidth: true,
              focusOnSelect: true
          }
        }
      ]
});


jQuery('.relatedBlogs').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMode: false,
  focusOnSelect: true,
  autoplay: true,
  arrows: false,
  dots:false,
  responsive: [
        {
          breakpoint: 1024,
          settings: {
              infinite: true,
              speed: 300,
              slidesToShow: 3,
              slidesToScroll: 1,
              centerMode: false,
              variableWidth: true,
              focusOnSelect: true
          }
        }
      ]
});


jQuery('#prev-blog').click(function(e) {
  jQuery('.relatedBlogs').slick('slickNext');
});

jQuery('#next-blog').click(function(e) {
  jQuery('.relatedBlogs').slick('slickPrev');
});




var items = jQuery(".timeline .timeline-item"),
timelineHeight = jQuery(".timeline .timeline-box").height(),
greyLine = jQuery('.default-line'),
lineToDraw = jQuery('.draw-line');

// sets the height that the greyLine (.default-line) should be according to `.timeline ul` height

// run this function only if draw line exists on the page
if(lineToDraw.length) {
  jQuery(window).on('scroll', function () {

    // Need to constantly get '.draw-line' height to compare against '.default-line'
    var redLineHeight = lineToDraw.height(),
    greyLineHeight = greyLine.height(),
    windowDistance = jQuery(window).scrollTop(),
    windowHeight = jQuery(window).height() / 2,
    timelineDistance = jQuery(".timeline").offset().top;

    if(windowDistance >= timelineDistance - windowHeight) {
      line = windowDistance - timelineDistance + windowHeight;

      if(line <= greyLineHeight) {
        lineToDraw.css({
          'height' : line + 20 + 'px'
        });
      }
    }

    // This takes care of adding the class in-view to the li:before items
    var bottom = lineToDraw.offset().top + lineToDraw.outerHeight(true);
    items.each(function(index){
      var circlePosition = jQuery(this).offset();

      if(bottom > circlePosition.top) {				
        jQuery(this).addClass('in-view');
      } else {
        jQuery(this).removeClass('in-view');
      }
    });	
  });
}

var elementPosition = null;
var boxScrollHeight = 0;

function menuOnScroll(mySection, myMenu, myClass) {
  jQuery(window).scroll(function(){
    var elScroll = jQuery(window).scrollTop();
    if((jQuery(window).scrollTop() > (elementPosition != null && elementPosition.top)) && (boxScrollHeight > jQuery(window).scrollTop())){
      console.log(jQuery(window).scrollTop())
      jQuery('.stickysidenav').addClass('side-bar-fix');
    } else {
      jQuery('.stickysidenav').removeClass('side-bar-fix');
    }  
    jQuery(mySection).each(function(i){
      if (jQuery(this).offset().top <= elScroll) {
        jQuery(myMenu).removeClass(myClass);
        jQuery(myMenu).eq(i).addClass(myClass);
      }
    });
  });
}
menuOnScroll('.scroll-section',"a[data-location]", 'active');

function scrollToAnyPoint (navItem) {
  var getAttr;
  jQuery(navItem).click(function(e){
    e.preventDefault();
    // getAttr = jQuery(this).attr('data-location');
    getAttr = jQuery(this).attr('data-location');
    console.log('getAttr', getAttr)
    const getID = '#'+getAttr;
    var toSection = jQuery(getID).offset().top + 20;
    jQuery("html, body").animate({scrollTop:toSection}, 1000)
  });
}

scrollToAnyPoint("a[data-location]");

jQuery('#show-more').on('click', function(){
  console.log('log')
  callFunction()
})



function callFunction(){
  elementPosition = null;
  jQuery('.stickysidenav').hide()
  jQuery('#sticky-details').toggleClass('show-details')
 
  setTimeout( function(){
   elementPosition = jQuery('.show-more-box').offset();
   jQuery('.stickysidenav').fadeIn('slow')
  }, 100)
  setTimeout( function(){
    jQuery('.stickysidenav').fadeIn('slow')
    let sideMenuH = jQuery('.stickysidenav').height();
    let moreBoxH =  jQuery('.show-more-box').height();
    boxScrollHeight = ( moreBoxH + elementPosition.top) - sideMenuH;
    console.log(boxScrollHeight, elementPosition, sideMenuH)
   }, 300)
}




jQuery(".accordion-item .accordion-title").click(function(){
  jQuery(this).next().slideToggle().siblings(".accordion-details:visible").slideUp();
});



jQuery(document).ready(function(){
  var listPosition = []
  var x = document.querySelectorAll(".slider-item");
  for (let i = 0; i < x.length; i++) {
    const leftPos = 630*i;
    listPosition.push(leftPos)
  }

  listPosition.forEach((ele, index) =>{
    x[index].style.left = `${ele}px`
  })

  const maxMove = (x.length-2)*630;
  let maxMoveItem = 0

  indexChange = 0

  jQuery('#prevButton').on('click', function(){
     if(maxMoveItem >= 0){
      const changePosi = listPosition.map((ele) => (ele - 630));
      changePosi.forEach((ele, index) =>{
        if(ele >= 0 && changePosi[0] <= 0){
          //x[index].style.left = `${ele}px`;
          jQuery(x[index]).animate({left:`${ele}px`})
          if(ele <= 0){
            // x[index].style.rotate = `${index*2}deg`;
            jQuery(x[index]).animate({rotate:`-${index*2}deg`})
            jQuery(x[index]).addClass('active')
          }
        }
      })
      console.log(changePosi)
      listPosition = changePosi;
      maxMoveItem = listPosition[changePosi.length -2];
     }
    
  })

  jQuery('#nextButton').on('click', function(){
    if(maxMove >= maxMoveItem){
      const changePosi = listPosition.map((ele) => (ele + 630));
      changePosi.forEach((ele, index) =>{
        if(ele >= 0  && changePosi[0] <= 0){
          // x[index].style.left = `${ele}px`
          jQuery(x[index]).animate({left:`${ele}px`})
          if(ele > 0){
            //x[index].style.rotate = `${0}deg`
            jQuery(x[index]).animate({rotate:`${0}deg`})
            jQuery(x[index]).removeClass('active')
          }
        }
      })
      console.log(changePosi)
      listPosition = changePosi;
      maxMoveItem = listPosition[changePosi.length -1];
    }
  })
  


});



function loadAnimation(){
  var action = new TimelineMax().to('#circle',5,{
      bezier:{
        curviness: 1.25,
        type: "cubic",
        values:[
          {x:100, y:100}, 
          {x:200, y:200}, 
          {x:300, y:300},
          {x:400, y:400},
          {x:500, y:500}
        ]},
      ease: Power0.easeNone})

 const scrollBar = new ScrollMagic.Scene({
    triggerElement: "#wrapper",
    duration: "100%",   
    offset:300
  })
  .setTween(action)
  .setPin("#wrapper")
  .addTo(controller)
  .on('update', (e) =>{
    // console.log(e, action)
    // const top = `translate3d(0px, ${e.scrollPos}px, 0px)`
    // jQuery('#circle').css({transform: top})
    
  })
  //.addIndicators();

  console.log('bezier', controller, scrollBar)

}


var skillPriceData = null;
var skillExpData = null;
var skillPeopleData = null;

function skillPrice(price){
  jQuery('.item-skill').removeClass('active');
  const activeItem = `#select-item-${price.id}`
  jQuery(activeItem).addClass('active')
  skillPriceData = price;
  console.log(price)
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData)
    jQuery('#total-price').text(cost)

  }
}
function skillExperience(count){
  jQuery('.exp-item').removeClass('active');
  const activeItem = `#exp-item-${count.id}`
  jQuery(activeItem).addClass('active')

  skillExpData = count;
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData);
    jQuery('#total-price').text(cost)
  }
  console.log(count)
}

function skilleldPeople(count){
  //console.log(count.target.value)
  skillPeopleData = count;
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData)
    jQuery('#total-price').text(cost)
  }
}

// const div = document.querySelector(`#resize`);
// const box = document.querySelector(`#resizable`);
// box.addEventListener(`mousedown`, (e) => {
//   const {
//     offsetX,
//     offsetY,
//   } = e;
//   div.style.width = offsetX + `px`;
// });

const
  range = document.getElementById('slide-range'),
  rangeV = document.getElementById('rangeV'),
  setValue = ()=>{
    const
      newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
      newPosition = 10 - (newValue * 0.2);
    rangeV.innerHTML = `<span>${range.value}</span>`;
    rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
    skilleldPeople(range.value)
  };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);