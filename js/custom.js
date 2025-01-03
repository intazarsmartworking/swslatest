

const wrapper = document.querySelector(".words");
if(wrapper){
  const words = wrapper.querySelectorAll("span");
  const currentWord = wrapper.querySelector("span.current");
  const wordsWidths = Array.from(words).map((word) => word.offsetWidth);
  const maxWordsWidth = Math.max(...wordsWidths);
  const CURRENT_CLASS = "current";
  const NEXT_CLASS = "next";

  wrapper.style.setProperty("--width", `${currentWord.offsetWidth}px`);
  wrapper.style.setProperty("--width-mobile", `${maxWordsWidth}px`);

  setInterval(() => {
    const currentWord = wrapper.querySelector("span.current");
    const nextWord = wrapper.querySelector("span.next");
    const nextNextWord = nextWord.nextElementSibling
      ? nextWord.nextElementSibling
      : wrapper.firstElementChild;
    currentWord.classList.remove(CURRENT_CLASS);
    nextWord.classList.remove(NEXT_CLASS);
    nextWord.classList.add(CURRENT_CLASS);
    nextNextWord.classList.add(NEXT_CLASS);
    wrapper.style.setProperty("--color", nextWord.dataset.color);
    wrapper.style.setProperty("--color-bg", nextWord.dataset.bgColor);
    wrapper.style.setProperty("--width", `${nextWord.offsetWidth}px`);
  }, 2000);
}


// Home Page Accordian
var screeSize = false; 
var timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;;

const today = new Date()
//console.log('dataSet', timeZone, Intl, today)
const checkLocation = today.toString()
const windoSize = window.innerWidth               
// $(window).on('resize', function(){
//     var win = $(this); //this = window
//     if (win.height() >= 820) { /* ... */ }
    
// }); 

// const showDolor = checkLocation.includes('India') ? '$':'£';

// jQuery('#typeCurrency').text(showDolor)

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
  const skillName = skillElement.querySelector('h6').textContent.trim();

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
  const skillName = skillElement.querySelector('h6').textContent.trim();
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
var newChangeValue = 1600;
function sliderFunction(){
 var interval = setInterval(function(){
      if(counter <= 100 && newChangeValue <= 4200){
        counter += 1;
        const width = `${counter}%`
        jQuery('#progress').css("width", width);
        jQuery('#range').val(counter);
        newChangeValue += 26;
        let changeValue = `£ ${newChangeValue}`
        jQuery('#price-value').text(changeValue);
        
        
      }else{
        counter = 0;
        newChangeValue = 1600;
        jQuery('#progress').css("width", 0);
        jQuery('#range').val(0);
        let changeValue = `£ 0`
        const newValue = `£ 1600`;
        jQuery('#price-value').text(newValue);
        clearInterval(interval);
        sliderFunction()
      }
  }, 100);
}
sliderFunction()

var interval2;
var counter2 = 0;
var newChangeValue2 = 1600;
function sliderFunction2(){
 var interval2 = setInterval(function(){
      if(counter2 <= 100 && newChangeValue2 <= 4200){
        counter2 += 1;
        const width = `${counter2}%`
        jQuery('.progress-bar').css("width", width);
        jQuery('.header-range').val(counter2);
        newChangeValue2 += 26;
        let changeValue = `£ ${newChangeValue2}`
        jQuery('.price-value').text(changeValue);
        
        
      }else{
        counter2 = 0;
        newChangeValue2 = 1600;
        jQuery('progress-bar').css("width", 0);
        jQuery('.header-range').val(0);
        let changeValue = `£ 0`
        const newValue = `£ 1600`
        jQuery('.price-value').text(newValue);
        clearInterval(interval2);
        sliderFunction2()
      }
  }, 100);
}
sliderFunction2()

var controller = new ScrollMagic.Controller();

function homePageAnimation(){

// define movement of panels

var wipeAnimation;

if(!screeSize){
    //console.log('screeSize', screeSize)
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


$('.logoSlider').slick({
  dots: true,
  infinite: false,
  speed: 100,
  slidesToShow: 8,
  slidesToScroll: 4,
  centerMode: false,
  focusOnSelect: true,
  autoplay: true,
  arrows: false,
  dots:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 4,
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
    var elScroll = jQuery(window).scrollTop() + 150;
    if((jQuery(window).scrollTop() > (elementPosition != null && elementPosition.top)) && (boxScrollHeight > jQuery(window).scrollTop())){
      //console.log(jQuery(window).scrollTop())
      jQuery('.stickysidenav').addClass('side-bar-fix');
    } 
    // else {
    //   jQuery('.stickysidenav').removeClass('side-bar-fix');
    // }  
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
    //console.log('getAttr', getAttr)
    const getID = '#'+getAttr;
    var toSection = jQuery(getID).offset().top - 150;
    jQuery("html, body").animate({scrollTop:toSection}, 1000)
  });
}

scrollToAnyPoint("a[data-location]");

jQuery('#show-more').on('click', function(){
  //console.log('log', jQuery(this).text())
  jQuery('#change-icons').toggleClass('change-icons')

  if(jQuery(this).text() == 'Show more'){
    jQuery(this).text('Hide')
  }else{
    jQuery(this).text('Show more')
  }
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
    //console.log(boxScrollHeight, elementPosition, sideMenuH)
   }, 300)
}




jQuery(".accordion-item .accordion-title").click(function(){
  jQuery(this).next().slideToggle().siblings(".accordion-details:visible").slideUp();
});



jQuery(document).ready(function(){

  var listPosition = []
  var x = document.querySelectorAll(".slider-item");
  for (let i = 0; i < x.length; i++) {
    const leftPos =410*i;
    listPosition.push(leftPos)
  }

  listPosition.forEach((ele, index) =>{
    x[index].style.left = `${ele}px`
  })

  const maxMove = (x.length-2)*410;
  let maxMoveItem = 0

  indexChange = 1;

  jQuery('#prevButton').on('click', function(){
    var rNum = (Math.random()*8)-5;
     if(maxMoveItem >= 0){
      const changePosi = listPosition.map((ele) => (ele - 410));
      changePosi.forEach((ele, index) =>{
        if(ele >= 0 && changePosi[0] <= 0){
          //x[index].style.left = `${ele}px`;
          jQuery(x[index]).animate({left:`${ele+(20*index)}px`})
          if(ele <= 0){
            // x[index].style.rotate = `${index*2}deg`;
            jQuery(x[index]).animate({rotate:`${rNum}deg`})
            jQuery(x[index]).animate({top: 300},"slow");
            jQuery(x[index]).animate({top: 0},"slow");
            jQuery(x[index]).addClass('active')
          }
        }
      })
      //console.log(changePosi)
      listPosition = changePosi;
      maxMoveItem = listPosition[changePosi.length -2];
     }
     indexChange = indexChange + 1;

     if(indexChange > 0  && x.length > indexChange){
      jQuery('#prevButton').prop('disabled', false);
      jQuery('#nextButton').prop('disabled', false);
     }else{
      jQuery('#prevButton').prop('disabled', true);
      jQuery('#nextButton').prop('disabled', false);
     }

    
  })

  jQuery('#nextButton').on('click', function(){
    if(maxMove >= maxMoveItem){
      const changePosi = listPosition.map((ele) => (ele + 410));
      changePosi.forEach((ele, index) =>{
        if(ele >= 0  && changePosi[0] <= 0){
          // x[index].style.left = `${ele}px`
          jQuery(x[index]).animate({left:`${ele+(20*index)}px`})
          if(ele > 0){
            //x[index].style.rotate = `${0}deg`
            jQuery(x[index]).animate({rotate:`${0}deg`})
            jQuery(x[index]).removeClass('active')
          }
        }
      })
      //console.log(changePosi)
      listPosition = changePosi;
      maxMoveItem = listPosition[changePosi.length -1];
    }
    indexChange = indexChange - 1;
    if(indexChange > 1 && x.length > indexChange){
      jQuery('#prevButton').prop('disabled', false);
      jQuery('#nextButton').prop('disabled', false);
     }else{
      jQuery('#prevButton').prop('disabled', false);
      jQuery('#nextButton').prop('disabled', true);
     }

  })


  var listPosition2 = []
  var x2 = document.querySelectorAll(".slider-item2");
  for (let i = 0; i < x2.length; i++) {
    const leftPos2 =410*i;
    listPosition2.push(leftPos2)
  }

  listPosition2.forEach((ele, index) =>{
    x2[index].style.left = `${ele}px`
  })

  const maxMove2 = (x2.length-2)*410;
  let maxMoveItem2 = 0

  indexChange2 = 1;

  jQuery('#prevButton2').on('click', function(){
    var rNum2 = (Math.random()*8)-5;
     if(maxMoveItem2 >= 0){
      const changePosi2 = listPosition2.map((ele) => (ele - 410));
      changePosi2.forEach((ele, index) =>{
        if(ele >= 0 && changePosi2[0] <= 0){
          //x[index].style.left = `${ele}px`;
          jQuery(x2[index]).animate({left:`${ele+(20*index)}px`})
          if(ele <= 0){
            // x[index].style.rotate = `${index*2}deg`;
            jQuery(x2[index]).animate({rotate:`${rNum2}deg`})
            jQuery(x2[index]).animate({top: 300},"slow");
            jQuery(x2[index]).animate({top: 0},"slow");
            jQuery(x2[index]).addClass('active')
          }
        }
      })
      //console.log(changePosi)
      listPosition2 = changePosi2;
      maxMoveItem2 = listPosition2[changePosi2.length -2];
     }
     indexChange2 = indexChange2 + 1;

     if(indexChange2 > 0  && x2.length > indexChange2){
      jQuery('#prevButton2').prop('disabled', false);
      jQuery('#nextButton2').prop('disabled', false);
     }else{
      jQuery('#prevButton2').prop('disabled', true);
      jQuery('#nextButton2').prop('disabled', false);
     }

    
  })

  jQuery('#nextButton2').on('click', function(){
    if(maxMove2 >= maxMoveItem2){
      const changePosi2 = listPosition2.map((ele) => (ele + 410));
      changePosi2.forEach((ele, index) =>{
        if(ele >= 0  && changePosi2[0] <= 0){
          // x[index].style.left = `${ele}px`
          jQuery(x2[index]).animate({left:`${ele+(20*index)}px`})
          if(ele > 0){
            //x[index].style.rotate = `${0}deg`
            jQuery(x2[index]).animate({rotate:`${0}deg`})
            jQuery(x2[index]).removeClass('active')
          }
        }
      })
      //console.log(changePosi)
      listPosition2 = changePosi2;
      maxMoveItem2 = listPosition2[changePosi2.length -1];
    }
    indexChange2 = indexChange2 - 1;
    if(indexChange2 > 1 && x2.length > indexChange2){
      jQuery('#prevButton2').prop('disabled', false);
      jQuery('#nextButton2').prop('disabled', false);
     }else{
      jQuery('#prevButton2').prop('disabled', false);
      jQuery('#nextButton2').prop('disabled', true);
     }

  })







  
  setTimeout(() =>{
    jQuery('.userMore').slick({
      infinite: true,
      speed: 100,
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: false,
      focusOnSelect: true,
      autoplay: true,
      arrows: true,
      dots:false,
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
  }, 200)


});



function loadAnimation(){
  
  const elementRayItem = document.querySelectorAll(".path-box");
  jQuery(elementRayItem[elementRayItem.length - 1]).addClass('last-arrow');

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

  //console.log('bezier', controller, scrollBar)

}

function converter(valor){
  var numero = Intl.NumberFormat('en-US').format(valor);
  return numero
}

var skillPriceData = null;
var skillExpData = null;
var skillPeopleData = 1;
var isEurope = true;
var upToPrice = 55000;
var fromPrice = 3500;
var toPrice = 4600;
var fromRangePrice = 0;
var toRangePrice = 0;


let locationCountry = Intl.DateTimeFormat().resolvedOptions().timeZone;
  //console.log('locationCountry', locationCountry)
  if(locationCountry.includes('Calcutta')){
    jQuery('.addr-india').show();
    jQuery('.addr-uk').show();
  }else{
    jQuery('.addr-uk').show();
  }


  if(locationCountry.includes('Europe')){
    //console.log('Europe')
    isEurope = true;
    jQuery('.currency-symble').text('£');
    jQuery('.upToPrice').text(converter(upToPrice));
    jQuery('.from-price').text(converter(fromRangePrice));
    jQuery('.to-price').text(converter(toRangePrice));
    jQuery('.currency-pound').show();

  }else{
    //console.log('Asia')
    isEurope = false;
    jQuery('.currency-symble').text('$');
    const convrtDoller = upToPrice*1.30;
    jQuery('.upToPrice').text(converter(convrtDoller));
    const fromDoller = fromPrice*1.30;
    const toDoller = toPrice*1.30;
    jQuery('.from-price').text(converter(fromRangePrice));
    jQuery('.to-price').text(converter(toRangePrice));
    jQuery('.currency-dollar').show();
  }
  //console.log('locationCountry', locationCountry)


function skillPrice(price){
  //console.log(item)
  //const price = JSON.parse(item);
  // jQuery('.item-skill').removeClass('active');
  // const activeItem = `#select-item-${price.id}`
  // jQuery(activeItem).addClass('active')
  // console.log(typeof price)
  // const dataPrice = JSON.stringify(price)
  skillPriceData = price;
  //console.log(price, skillPriceData)
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    //const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData)
    const cost = Number(skillPriceData[skillExpData.level])
    const totalPrice = isEurope ? cost : Math.trunc((cost*1.30))
    jQuery('#total-price').text(totalPrice)


    if(skillPriceData.midLevel == 26 && skillPriceData.senior == 30){
      fromRangePrice = isEurope ? 5070 : Math.trunc((5070*1.30));
      toRangePrice = isEurope ? 5850 : Math.trunc((5850*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 69680 : Math.trunc((69680*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));

    }else if(skillPriceData.midLevel == 22 && skillPriceData.senior == 24){
      fromRangePrice = isEurope ? 4290 : Math.trunc((4290*1.30));
      toRangePrice = isEurope ? 4680 : Math.trunc((4680*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 63840 : Math.trunc((63840*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));


    }else if(skillPriceData.midLevel == 20 && skillPriceData.senior == 22){
      fromRangePrice = isEurope ? 3900 : Math.trunc((3900*1.30));
      toRangePrice = isEurope ? 4290 : Math.trunc((4290*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 33520 : Math.trunc((33520*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));

    }else if(skillPriceData.midLevel == 18 && skillPriceData.senior == 20){
      fromRangePrice = isEurope ? 3510 : Math.trunc((3510 *1.30));
      toRangePrice = isEurope ? 3900 : Math.trunc((3900*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 33200 : Math.trunc((33200*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));
      
    }else if(skillPriceData.midLevel == 14 && skillPriceData.senior == 18){
      fromRangePrice = isEurope ? 2730 : Math.trunc((2730 *1.30));
      toRangePrice = isEurope ? 3510 : Math.trunc((3510*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 27880 : Math.trunc((27880*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));
    }

    
    

  }
}
function skillExperience(count){
  jQuery('.exp-item').removeClass('active');
  const activeItem = `#exp-item-${count.id}`
  jQuery(activeItem).addClass('active')

  skillExpData = count;
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    // const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData);
    const cost = Number(skillPriceData[skillExpData.level])
    const totalPrice = isEurope ? cost : Math.trunc((cost*1.30))
    jQuery('#total-price').text(totalPrice)
    // jQuery('#total-price').text(cost)

    // if(skillPriceData[skillExpData.level] == 12){
    //   const discount = 750*skillPeopleData;
    //   const converPrice = isEurope ? discount : Math.trunc((discount*1.30))
    //   jQuery('.discount-price').text(converPrice);
    // }else if(skillPriceData[skillExpData.level] == 14){
    //   const discount = 1500*skillPeopleData;
    //   const converPrice = isEurope ? discount : Math.trunc((discount*1.30))
    //   jQuery('.discount-price').text(converPrice);

    //   fromRangePrice = isEurope ? 1270 : Math.trunc((1270*1.30));
    //   toRangePrice = isEurope ? 2323 : Math.trunc((2323*1.30));
    //   jQuery('.from-price').text(converter(fromRangePrice));
    //   jQuery('.to-price').text(converter(toRangePrice));

    // }else if(skillPriceData[skillExpData.level] == 15){
    //   const discount = 1875*skillPeopleData;
    //   const converPrice = isEurope ? discount : Math.trunc((discount*1.30))
    //   jQuery('.discount-price').text(converPrice);
    // }else if(skillPriceData[skillExpData.level] == 17){
    //   const discount = 2625*skillPeopleData;
    //   const converPrice = isEurope ? discount : Math.trunc((discount*1.30))
    //   jQuery('.discount-price').text(converPrice);
    // }else if(skillPriceData[skillExpData.level] == 18){
    //   const discount = 3000*skillPeopleData;
    //   const converPrice = isEurope ? discount : Math.trunc((discount*1.30))
    //   jQuery('.discount-price').text(converPrice);

    //   fromRangePrice = isEurope ? 1270 : Math.trunc((1270*1.30));
    //   toRangePrice = isEurope ? 2323 : Math.trunc((2323*1.30));
    //   jQuery('.from-price').text(converter(fromRangePrice));
    //   jQuery('.to-price').text(converter(toRangePrice));

    // }else if(skillPriceData[skillExpData.level] == 20){
    //   const discount = 3750*skillPeopleData;
    //   const converPrice = isEurope ? discount : Math.trunc((discount*1.30))
    //   jQuery('.discount-price').text(converPrice);
    // }else if(skillPriceData[skillExpData.level] == 22){
    //   const discount = 4500*skillPeopleData;
    //   const converPrice = isEurope ? discount : Math.trunc((discount*1.30))
    //   jQuery('.discount-price').text(converPrice);
    // }

    if(skillPriceData.midLevel == 26 && skillPriceData.senior == 30){
      fromRangePrice = isEurope ? 5070 : Math.trunc((5070*1.30));
      toRangePrice = isEurope ? 5850 : Math.trunc((5850*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 69680 : Math.trunc((69680*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));

    }else if(skillPriceData.midLevel == 22 && skillPriceData.senior == 24){
      fromRangePrice = isEurope ? 4290 : Math.trunc((4290*1.30));
      toRangePrice = isEurope ? 4680 : Math.trunc((4680*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 63840 : Math.trunc((63840*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));


    }else if(skillPriceData.midLevel == 20 && skillPriceData.senior == 22){
      fromRangePrice = isEurope ? 3900 : Math.trunc((3900*1.30));
      toRangePrice = isEurope ? 4290 : Math.trunc((4290*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 33520 : Math.trunc((33520*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));

    }else if(skillPriceData.midLevel == 18 && skillPriceData.senior == 20){
      fromRangePrice = isEurope ? 3510 : Math.trunc((3510 *1.30));
      toRangePrice = isEurope ? 3900 : Math.trunc((3900*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 33200 : Math.trunc((33200*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));
      
    }else if(skillPriceData.midLevel == 14 && skillPriceData.senior == 18){
      fromRangePrice = isEurope ? 2730 : Math.trunc((2730 *1.30));
      toRangePrice = isEurope ? 3510 : Math.trunc((3510*1.30));
      jQuery('.from-price').text(converter(fromRangePrice));
      jQuery('.to-price').text(converter(toRangePrice));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 27880 : Math.trunc((27880*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));
    }

    

  }
  //console.log(count)
}

function skilleldPeople(count){
  //console.log(count.target.value)
  skillPeopleData = count;
  if(skillPriceData != null && skillExpData != null && skillPeopleData != null){
    // const cost = Number(skillPriceData[skillExpData.level]) * Number(skillPeopleData)
    const cost = Number(skillPriceData[skillExpData.level])
    const totalPrice = isEurope ? cost : Math.trunc((cost*1.30))
    jQuery('#total-price').text(totalPrice)

    if(skillPriceData.midLevel == 26 && skillPriceData.senior == 30){
      fromRangePrice = isEurope ? 5070 : Math.trunc((5070*1.30));
      toRangePrice = isEurope ? 5850 : Math.trunc((5850*1.30));
      jQuery('.from-price').text(converter(fromRangePrice*skillPeopleData));
      jQuery('.to-price').text(converter(toRangePrice*skillPeopleData));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 69680 : Math.trunc((69680*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));

    }else if(skillPriceData.midLevel == 22 && skillPriceData.senior == 24){
      fromRangePrice = isEurope ? 4290 : Math.trunc((4290*1.30));
      toRangePrice = isEurope ? 4680 : Math.trunc((4680*1.30));
      jQuery('.from-price').text(converter(fromRangePrice*skillPeopleData));
      jQuery('.to-price').text(converter(toRangePrice*skillPeopleData));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 63840 : Math.trunc((63840*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));


    }else if(skillPriceData.midLevel == 20 && skillPriceData.senior == 22){
      fromRangePrice = isEurope ? 3900 : Math.trunc((3900*1.30));
      toRangePrice = isEurope ? 4290 : Math.trunc((4290*1.30));
      jQuery('.from-price').text(converter(fromRangePrice*skillPeopleData));
      jQuery('.to-price').text(converter(toRangePrice*skillPeopleData));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 33520 : Math.trunc((33520*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));

    }else if(skillPriceData.midLevel == 18 && skillPriceData.senior == 20){
      fromRangePrice = isEurope ? 3510 : Math.trunc((3510 *1.30));
      toRangePrice = isEurope ? 3900 : Math.trunc((3900*1.30));
      jQuery('.from-price').text(converter(fromRangePrice*skillPeopleData));
      jQuery('.to-price').text(converter(toRangePrice*skillPeopleData));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 33200 : Math.trunc((33200*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));
      
    }else if(skillPriceData.midLevel == 14 && skillPriceData.senior == 18){
      fromRangePrice = isEurope ? 2730 : Math.trunc((2730 *1.30));
      toRangePrice = isEurope ? 3510 : Math.trunc((3510*1.30));
      jQuery('.from-price').text(converter(fromRangePrice*skillPeopleData));
      jQuery('.to-price').text(converter(toRangePrice*skillPeopleData));

      const startPrice = isEurope ? skillPriceData.midLevel : Math.trunc((skillPriceData.midLevel*1.30));
      const endPrice = isEurope ? skillPriceData.senior : Math.trunc((skillPriceData.senior*1.30));
      jQuery('.start-price').text(converter(startPrice));
      jQuery('.end-price').text(converter(endPrice));

      const upToDiscount = isEurope ? 27880 : Math.trunc((27880*1.30));
      jQuery('.up-to-disc').text(converter(upToDiscount));
    }

    
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

function loadPricePage(){
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
}


jQuery(".header-menu li a.more_menu").on('click', function(e){
  e.preventDefault();
  jQuery('.header-menu li a').removeClass('active');
  jQuery(this).addClass('active')
  
  jQuery('.mega-menu-box').addClass('open')
  jQuery('.show-main-menu').removeClass('active-menu')
  const getAttr = jQuery(this).attr('data-mainmenu');
 
  const getId = `#${getAttr}`;
  jQuery(getId).addClass('active-menu');
  jQuery('.mega-menu-left li').removeClass('active');
  if(getAttr == 'hireDevId'){
    jQuery('#hireDevId .mega-menu-left li').first().addClass('active');
  }else if(getAttr == 'insightsId'){
    jQuery('#insightsId .mega-menu-left li').first().addClass('active');
  }
})
jQuery(".mega-menu-left li").on('click', function(){
  jQuery('.mega-menu-left li').removeClass('active');
  jQuery(this).addClass('active');
  jQuery('.show-more-menu').removeClass('show-more')
  const getAttr = jQuery(this).attr('data-menu');
  //console.log('getAttr', getAttr)
  const getId = `#${getAttr}`;
  // const getIdMore = `#mobile-${getAttr}`;
  // jQuery(getIdMore).addClass('show-more')
  jQuery(getId).addClass('show-more')
})

jQuery('body').on('click',function(event){
  if(jQuery(event.target).is('.header-menu li a')){
    //jQuery('.header-menu li a').removeClass('active');
    return
  }
  if(jQuery(event.target).closest('.mega-menu-box').length === 0){
    jQuery(".mega-menu-box").removeClass("open");
    jQuery('.header-menu li a').removeClass('active');
  }
});

var countedSlide = 0;

jQuery(window).scroll(function(){
  var sticky = jQuery('.main-header'),
      scroll = jQuery(window).scrollTop();
      jQuery('.header-menu li a').removeClass('active');
      jQuery(".mega-menu-box").removeClass("open");
      //jQuery('#mobile-show-menu').removeClass("isMenuShow");
    if (scroll >= 5){
      sticky.addClass('fixed')
    }else{
      sticky.removeClass('fixed')
    };
});

jQuery("#mobile-menu-show").on('click', function(){
  jQuery('#mobile-show-menu').toggleClass('isMenuShow')
})


$("#myInput").on("keyup", function() {
  var value = this.value.toLowerCase().trim();
  $("#searchItem .item-skill").show().filter(function() {
    return $(this).text().toLowerCase().trim().indexOf(value) == -1;
  }).hide();
});


if(checkLocation.includes('India')){
  //console.log('India')
  const contryName = `
          <h6 class="text-footer-menu-color text-base font-medium leading-normal"> India </h6>
          <p class="text-footer-menu-color text-sm leading-normal"> C Block Community Centre, Plot No. 6, Upper Ground Floor, Delhi, 110058 </p>
          <h6 class="text-footer-menu-color text-base font-medium leading-normal mt-5"> United Kingdom </h6>
          <p class="text-footer-menu-color text-sm leading-normal"> The Plaza, 535 King’s Rd, London SW10 0SZ </p>
          `;
  jQuery('#findAdress').append(contryName)
}else{
  const contryName = `<h6 class="text-footer-menu-color text-base font-medium leading-normal"> United Kingdom </h6>
          <p class="text-footer-menu-color text-sm leading-normal"> The Plaza, 535 King’s Rd, London SW10 0SZ </p>`;
  jQuery('#findAdress').append(contryName)
}




function priceRateGet(){
  var priceDataPound = [
    {id:1, midLevel:12,senior:15, name:'WordPress'},
    {id:2,midLevel:15,senior:18, name:'PHP'},
    {id:3,midLevel:15,senior:18, name:'QA'},
    {id:4,midLevel:14,senior:17, name:'Data Analyst'},
    {id:5,midLevel:14,senior:17, name:'Data Engineer'},
    {id:6,midLevel:17,senior:20, name:'MongoDB'},
    {id:7,midLevel:17,senior:20, name:'Laravel'},
    {id:8,midLevel:17,senior:20, name:'Kubernetes'},
    {id:9,midLevel:17,senior:20, name:'iOS'},
    {id:10,midLevel:17,senior:20, name:'Docker'},
    {id:11,midLevel:17,senior:20, name:'Django'},
    {id:12,midLevel:17,senior:20, name:'DevOps'},
    {id:13,midLevel:17,senior:20, name:'Azure'},
    {id:14,midLevel:17,senior:20, name:'AWS'},
    {id:15,midLevel:17,senior:20, name:'Angular'},
    {id:16,midLevel:17,senior:20, name:'Python'},
    {id:17,midLevel:17,senior:20, name:'Node.js'},
    {id:18,midLevel:17,senior:20, name:'Woo Commerce'},
    {id:19,midLevel:17,senior:20, name:'Unity'},
    {id:20,midLevel:17,senior:20, name:'AI'},
    {id:21,midLevel:17,senior:20, name:'.Net'},
    {id:22,midLevel:17,senior:20, name:'Ruby on Rails'},
    {id:23,midLevel:17,senior:20, name:'JavaScript'},
    {id:24,midLevel:17,senior:20, name:'Salesforce'},
    {id:25,midLevel:17,senior:20, name:'Java'},
    {id:26,midLevel:17,senior:20, name:'Game'},
    {id:27,midLevel:17,senior:20, name:'Blockchain'},
    {id:28,midLevel:17,senior:20, name:'React'},
    {id:29,midLevel:17,senior:20, name:'React Native'},
    {id:30,midLevel:17,senior:20, name:'Magento'},
    {id:31,midLevel:17,senior:20, name:'Shopify Developer'},
    {id:32,midLevel:17,senior:20, name:'Flutter'},
    {id:33,midLevel:17,senior:20, name:'Kubernetes'},
    {id:34,midLevel:17,senior:20, name:'AWS'},
    {id:35,midLevel:17,senior:20, name:'Azure'},
    {id:36,midLevel:17,senior:20, name:'DevOps'},
    {id:37,midLevel:17,senior:20, name:'Django'},
    {id:38,midLevel:17,senior:20, name:'Docker'},
    {id:39,midLevel:17,senior:20, name:'iOS'},
    {id:40,midLevel:17,senior:20, name:'Android'},
  ]

  var priceDataDoller = [
    {id:1, midLevel:16, senior:20, name:'WordPress'},
    {id:2, midLevel:20, senior:24, name:'PHP'},
    {id:3, midLevel:20, senior:24, name:'QA'},
    {id:4, midLevel:18, senior:23, name:'Data Analyst'},
    {id:5, midLevel:18, senior:23, name:'Data Engineer'},
    {id:6, midLevel:23, senior:26, name:'MongoDB'},
    {id:7, midLevel:23, senior:26, name:'Laravel'},
    {id:8, midLevel:23, senior:26, name:'Kubernetes'},
    {id:9, midLevel:23, senior:26, name:'iOS'},
    {id:10, midLevel:23, senior:26, name:'Docker'},
    {id:11, midLevel:23, senior:26, name:'Django'},
    {id:12, midLevel:23, senior:26, name:'DevOps'},
    {id:13, midLevel:23, senior:26, name:'Azure'},
    {id:14, midLevel:23, senior:26, name:'AWS'},
    {id:15, midLevel:23, senior:26, name:'Angular'}
  ]

  var priceDataEuro = [
    {id:1,midLevel:14,senior:18, name:'WordPress'},
    {id:2,midLevel:18,senior:21, name:'PHP'},
    {id:3,midLevel:18,senior:21, name:'QA'},
    {id:4,midLevel:17,senior:20, name:'Data Analyst'},
    {id:5,midLevel:17,senior:20, name:'Data Engineer'},
    {id:6,midLevel:20,senior:24, name:'MongoDB'},
    {id:7,midLevel:20,senior:24, name:'Laravel'},
    {id:8,midLevel:20,senior:24, name:'Kubernetes'},
    {id:9,midLevel:20,senior:24, name:'iOS'},
    {id:10,midLevel:20,senior:24, name:'Docker'},
    {id:11,midLevel:20,senior:24, name:'Django'},
    {id:12,midLevel:20,senior:24, name:'DevOps'},
    {id:13,midLevel:20,senior:24, name:'Azure'},
    {id:14,midLevel:20,senior:24, name:'AWS'},
    {id:15,midLevel:20,senior:24, name:'Angular'}
  ]

  var priceLocationList = []

  if(timeZone.includes('Europe')){
    priceLocationList = priceDataEuro;
  }else{
    priceLocationList = priceDataPound;
    //console.log('priceDataDoller', priceDataDoller)
  }



  var priceData = jQuery('#searchItem');
  const sortPriceLocationList = priceLocationList.sort((a,b)=> {
    var a1 = a.name.toLowerCase();
    var b1 = b.name.toLowerCase();
    return a1<b1 ?-1:a1> b1? 1 :0;
    })
    // sortPriceLocationList.forEach(function(item) {
    //     var itemData = jQuery('<div class="item-skill text-[#040524] text-[12px] text-center content-center p-3 h-[80px] rounded-[8px] border border-[rgba(5,4,3,0.20)] "><span class="block pro-name">'+item.name+'</span><span class="active-img absolute bg-[#DF4402] text-white rounded-full font-extrabold h-[20px] w-[20px] right-[-7px] top-[-5px]">&#10003</span></div>').data('price', item)
    //       priceData.append(itemData);
    //   });


      priceData.on('click', '.item-skill', function() {
          jQuery('.item-skill').removeClass('active')
          jQuery(this).addClass('active')
          var priceValue = jQuery(this).data('price');
          var priceValueDolor = jQuery(this).data('dolor');
          //console.log('priceValue', priceValue, priceValueDolor)
          // const priceData = JSON.stringify(priceValue)
          skillPrice(priceValue);
      });




}



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
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('.logo-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 3,
    autoplay: true,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('#vetted-profile').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('#vetted-profiles-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    arrows:false,
    prevArrow: jQuery('#prev-slide'),
    nextArrow: jQuery('#next-slide'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('#prev-slide').click(function(e) {
    jQuery('#vetted-profiles-slider').slick('slickNext');
  });
  
  jQuery('#next-slide').click(function(e) {
    jQuery('#vetted-profiles-slider').slick('slickPrev');
  });

  jQuery('#content-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows:false,
    prevArrow: jQuery('#prev-slide'),
    nextArrow: jQuery('#next-slide'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          dots: false,
          infinite: true,
        }
      }
    ]
  });

  jQuery('#prev-slide').click(function(e) {
    jQuery('#content-slider').slick('slickNext');
  });
  
  jQuery('#next-slide').click(function(e) {
    jQuery('#content-slider').slick('slickPrev');
  });


  priceRateGet()
});



scrollTotalBox = 0;
jQuery('#top-scroll').on('click', function() {
  jQuery('html, body').animate({
    scrollTop: jQuery('html, body').offset().top,
  });
  scrollTotalBox = 0;
  // jQuery('#down-scroll').show()
  // jQuery('#top-scroll').hide()
});
jQuery('#down-scroll').on('click', function() {
  jQuery('html, body').animate({
    scrollTop: jQuery('html, body').offset().top + 610,
  });
  scrollTotalBox = 610;
  // jQuery('#down-scroll').hide()
  // jQuery('#top-scroll').show()
});

jQuery(function () { // wait for document ready
  jQuery('#down-scroll').show()
  jQuery(window).scroll(function(){
    const scrollWind = jQuery(this).scrollTop()
    //console.log(scrollWind)
    if(scrollWind > 600){
      jQuery('#down-scroll').hide()
      jQuery('#top-scroll').show()
    }else{
      jQuery('#down-scroll').show()
      jQuery('#top-scroll').hide()
    }
  });
 
    // define movement of panels

    var x = document.querySelectorAll(".process-slide");
    
    var controllerHire = new ScrollMagic.Controller();

    // define movement of panels
    var wipeAnimationHire = new TimelineMax();
    // var wipeAnimationHire = new TimelineMax()
    // .fromTo(".slide-point-1", 1, {y: "0%", opacity:1,}, {y: "0%",opacity:1, ease: Linear.easeNone})  // in from left
    // .fromTo(".slide-point-2", 1, {y: "20%", opacity:0,}, {y: "0%",opacity:1, ease: Linear.easeNone})  // in from left
    // .fromTo(".slide-point-3", 1, {y:  "20%", opacity:0,}, {y: "0%",opacity:1, ease: Linear.easeNone})  // in from right

    for (let i = 0; i < x.length; i++) {
      const slideClass = `.slide-point-${i+1}`
     if(i == 0){
      wipeAnimationHire.fromTo(slideClass, 1, {y: "0%", opacity:1,}, {y: "0%",opacity:1, ease: Linear.easeNone})
     }else{
      wipeAnimationHire.fromTo(slideClass, 1, {y: "50%", opacity:0,}, {y: "0%",opacity:1, ease: Linear.easeNone})
     }
    }

    // create scene to pin and link animation
    new ScrollMagic.Scene({
        triggerElement: "#pinContainerHire",
        triggerHook: "onLeave",
        duration: "300%",
        offset:-200
      })
      .setPin("#pinContainerHire")
      .setTween(wipeAnimationHire)
      //.addIndicators() // add indicators (requires plugin)
      .addTo(controllerHire);
});


jQuery('.slider-for').slick({
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplaySpeed: 7000,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav',
  pauseOnHover:false
});
jQuery('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  vertical:true,
  asNavFor: '.slider-for',
  dots: false,
  focusOnSelect: true,
  //centerMode:true,
  verticalSwiping:false,
  arrows: false,
  pauseOnHover:false
});




$('.customerStories').slick({
  dots: true,
  infinite: false,
  speed: 100,
  slidesToShow: 2,
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
        slidesToShow: 2,
        slidesToScroll: 1,
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




jQuery('#prevSlide').click(function(e) {
  jQuery('.customerStories').slick('slickNext');
});

jQuery('#nextSlide').click(function(e) {
  jQuery('.customerStories').slick('slickPrev');
});

scrollCounter = 0

function afetrLoadScrollBox(){
  const totalTop = document.getElementById('count-digit');
  jQuery(window).scroll(function(){
    if (scrollCounter == 0 && jQuery(window).scrollTop() > totalTop.offsetTop) {
      jQuery('.slider-for').slick('slickPlay');
      scrollCounter++
    }

  })
}


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
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
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





document.addEventListener('DOMContentLoaded', function() {
  let currentStep = 1;
  const steps = document.querySelectorAll('.step-box');
  const nextButtons = document.querySelectorAll('.next-step');
  const previousButtons = document.querySelectorAll('.previous-step');

  if(steps.length > 0){
    steps[0].classList.add('active')
    nextButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (currentStep < steps.length) {
                steps[currentStep - 1].classList.remove('active');
                steps[currentStep].classList.add('active');
                currentStep++;
            }
        });
    });
    
    previousButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (currentStep > 1) {
                steps[currentStep - 1].classList.remove('active');
                steps[currentStep - 2].classList.add('active');
                currentStep--;
            }
        });
    });

  }
  // Show the first step by default

});

var selectedSkill = [];
jQuery('.chip-skill li').on('click', function(){
  const hasClass = jQuery(this).hasClass('active')
  if(hasClass){
    jQuery(this).removeClass('active');
    const skill = jQuery(this).text()
    const findIndex = selectedSkill.indexOf(skill)
    selectedSkill.splice(findIndex, 1)
  }else{
    jQuery(this).addClass('active');
    const skill = jQuery(this).text()
    selectedSkill.push(skill);
  }
  console.log('selectedSkill', selectedSkill.length)
  jQuery('.count-skill').text(selectedSkill.length)
  if(selectedSkill.length == 0){
    jQuery('.next-step').prop('disabled', true);
  }else{
    jQuery('.next-step').prop('disabled', false);
  }
  //jQuery('#selected_skill').text(selectedSkill.length)
  jQuery('#selected_skill').val(JSON.stringify(selectedSkill));
})


jQuery("#search-skill").on('input', function() {
  // console.log('search')
  // if (jQuery("#search-skill").val() != '') {
  //   jQuery('.searched-skill-box').show();
  // } else {
  //   jQuery('.searched-skill-box').hide();
  // }
  var value = this.value.toLowerCase().trim();
  jQuery(".chip-skill li").show().filter(function() {
    return jQuery(this).text().toLowerCase().trim().indexOf(value) == -1;
  }).hide();
})

var block_free_domains = [
  'tempmail.com',
  '10minutemail.com',
  'guerrillamail.com',
  'mailinator.com',
  'dispostable.com',
  'throwawaymail.com',
  'maildrop.cc',
  'gmail.com', 
  'yahoo.com', 
  'aol.com', 
  'hotmail.com', 
  'outlook.com', 
  'aol.com', 
  'icloud.com', 
  'live.com', 
  'zoho.com', 
  'dont-reply.me'
]

jQuery("#email").on('input', function() {
  var value = this.value.toLowerCase().trim();
  const domain = value.split('@')[1];
  if(block_free_domains.includes(domain)){
    jQuery('#error-box').show();
    jQuery('#submit-form').prop('disabled', true);
  }else{
    jQuery('#error-box').hide();
    jQuery('#submit-form').prop('disabled', false);
  }
})



// jQuery(".searched-skill-list li").on('click', function(){
//   jQuery("#search-skill").val(''); email
//   jQuery('.searched-skill-box').hide();
// })

var smartFromPrice = 0;
var smartToPrice = 0;
var otherFromPrice = 0;
var otherToPrice = 0;
var fromHoursPrice = 0;
var toHoursPrice = 0;
var numberOfDev = 1;
var currencyValue = 1;
var saveAmount = 1;
var otherFromHoursPrice = 0;
var otherToHoursPrice = 0;
var experience = 'senior';
developerCast = {
  midLevel:0,
  senior:0,
   name: ''
};



jQuery('#select_skill').on('change', function() {
  const selectedValue = JSON.parse(jQuery(this).val());
  console.log('Selected value: ',  selectedValue);

  developerCast = selectedValue;

  // fromHoursPrice = selectedValue.midLevel;
  // toHoursPrice = selectedValue.senior;

  showConvertPrice()

});
jQuery('#experienceDev').on('change', function() {
  const selectedValue = jQuery(this).val();
  console.log('Selected value: ',  selectedValue);
  experience = selectedValue;
  console.log('devPrice', experience)
  showConvertPrice()
});

jQuery('#countriesList').on('change', function() {
  const selectedValue = jQuery(this).val();
  let imageName = ''
  if(selectedValue == 'us'){
    currencyValue = 1.2;
    jQuery('.currency-symbols').text('$');
    jQuery('.select-country').text('United States');
    imageName = 'flag-us';
  }else if(selectedValue == 'uk'){
    currencyValue = 1;
    jQuery('.currency-symbols').text('£');
    jQuery('.select-country').text('United Kingdom');
    imageName = 'flag-uk'
  }else{
    currencyValue = 1;
  }
  console.log('Selected value: ',  selectedValue);

  console.log(my_theme_vars.template_url);
  $('.countryImage').attr('src', my_theme_vars.template_url + '/images/'+imageName+'.svg');

  showConvertPrice()
  
  
})

jQuery('#increment-button').on('click',function() {
  numberOfDev = numberOfDev + 1;
  $('#quantity-input').val(numberOfDev);
  showConvertPrice()
});

// Decrease value by 1
jQuery('#decrement-button').on('click', function() {
  numberOfDev = numberOfDev - 1;
  if(numberOfDev > 0){
    $('#quantity-input').val(numberOfDev);
    showConvertPrice()
  }else{
    numberOfDev = 1;
    $('#quantity-input').val(numberOfDev);
  }
});

function showConvertPrice(){
    console.log('experience', experience)
    
    const showSmartPriceHours = developerCast[experience];
    const showSmartPriceHoursCurrency = showSmartPriceHours*currencyValue;
    const showSmartPriceHoursCurrencyDevs =  Math.trunc(showSmartPriceHoursCurrency);

    const showSmartPriceMonth = ((showSmartPriceHours*40)*52)/12;
    const showSmartPriceMonthCurrency = showSmartPriceMonth*currencyValue;
    const showSmartPriceMonthCurrencyDevs = Math.trunc(showSmartPriceMonthCurrency*numberOfDev);

    const showOtherPriceHoursCurrencyDevs = (showSmartPriceHoursCurrencyDevs*54)/100;
    const showOtherPriceMonthCurrencyDevs = (showSmartPriceMonthCurrencyDevs*54)/100;
    const showOtherPriceHoursCurrencyDevsRound = Math.ceil(showSmartPriceHoursCurrencyDevs + showOtherPriceHoursCurrencyDevs)
    const showOtherPriceMonthCurrencyDevsRound = Math.ceil(showSmartPriceMonthCurrencyDevs + showOtherPriceMonthCurrencyDevs)

    $('.smartHourPrice').text(converter(showSmartPriceHoursCurrencyDevs));
    $('.smartMonthPrice').text(converter(showSmartPriceMonthCurrencyDevs));

    $('.otherHourPrice').text(converter(showOtherPriceHoursCurrencyDevsRound));
    $('.otherMonthPrice').text(converter(showOtherPriceMonthCurrencyDevsRound));



    




    console.log('conver price', currencyValue, numberOfDev)
    const smartFromPriceChange = Math.trunc(((smartFromPrice/12)*numberOfDev)*currencyValue);
    const smartToPriceChange = Math.trunc(((smartToPrice/12)*numberOfDev)*currencyValue);

    jQuery('.smartFromPrice').text(converter(smartFromPriceChange));
    jQuery('.smartToPrice').text(converter(smartToPriceChange));

    const otherFromPriceChange = Math.trunc(((otherFromPrice/12)*numberOfDev)*currencyValue);
    const otherToPriceChange = Math.trunc(((otherToPrice/12)*numberOfDev)*currencyValue);

    jQuery('.otherFromPrice').text(converter(otherFromPriceChange));
    jQuery('.otherToPrice').text(converter(otherToPriceChange));

    const currencyStart = Math.trunc(fromHoursPrice*currencyValue);
    const currencyEnd = Math.trunc(toHoursPrice*currencyValue);

    jQuery('.currency-start').text(currencyStart);
    jQuery('.currency-end').text(currencyEnd)

    const saveAmount = Math.trunc(((otherToPriceChange - smartFromPriceChange)*12)*currencyValue)
    jQuery('.save-amount').text(converter(saveAmount));

    const currencyStartOther = Math.trunc(otherFromHoursPrice*currencyValue);
    const currencyEndOther = Math.trunc(otherToHoursPrice*currencyValue);

    jQuery('.currency-start-other').text(currencyStartOther);
    jQuery('.currency-end-other').text(currencyEndOther)

    
}

jQuery('.hero-slider').slick({
  infinite: true,
  autoplay: true,
  speed: 4000,
  autoplaySpeed: 0,
  slidesToShow: 6,
  slidesToScroll: 1,
  centerMode: true,
  focusOnSelect: false,
  arrows: false,
  dots:false,
  accessibility: false,
  touchMove: false,
  pauseOnHover: false,
  cssEase: 'linear',
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 1367,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 1281,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow:3,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 721,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        accessibility: false,
        touchMove: false,
      }
    }
  ]
});


jQuery('.case-tab').on('click', function(){
  jQuery('.case-tab').removeClass('active');
  jQuery('.tab-content').removeClass('active');
  const getId = jQuery(this).attr('data-id');
  jQuery(this).addClass('active')
  jQuery(`#${getId}`).addClass('active')
})
jQuery('.testimonial-tab li').on('click', function(){
  jQuery('.testimonial-tab li').removeClass('active');
  jQuery('.testimonial-content').removeClass('active');
  const getId = jQuery(this).attr('data-id');
  jQuery(this).addClass('active')
  jQuery(`#${getId}`).addClass('active')
})




jQuery(document).ready(function(){
	

	jQuery(".slider-hiw").slick({
    infinite: true,
    arrows: false,
    dots: false,
    autoplay: false,
    speed: 800,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnHover: false,
	});

	//ticking machine
	var percentTime;
	var tick;
	var time = 1;
	var progressBarIndex = 0;

	jQuery('.progressBarContainer .sliderProgressBar').each(function(index) {
	    var progressSlider = "<div class='inProgress inProgress" + index + "'></div>";
	    jQuery(this).html(progressSlider);
	});

	function startProgressbar() {
	    resetProgressbar();
	    percentTime = 0;
	    tick = setInterval(interval, 10);
	}

	function interval() {
	    if ((jQuery('.slider-hiw .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
	        progressBarIndex = jQuery('.slider-hiw .slick-track div[aria-hidden="false"]').data("slickIndex");
	        startProgressbar();
	    } else {
	        percentTime += 1 / (time + 5);
          jQuery('.inProgress').parent().parent().removeClass("active");
          jQuery('.inProgress' + progressBarIndex).parent().parent().addClass("active");
	        jQuery('.inProgress' + progressBarIndex).css({
            height: percentTime + "%"
	        });
	        if (percentTime >= 100) {
            jQuery('.single-item').slick('slickNext');
	            progressBarIndex++;
	            if (progressBarIndex > 2) {
	                progressBarIndex = 0;
	            }
	            startProgressbar();
	        }
	    }
	}

	function resetProgressbar() {
    jQuery('.inProgress').css({
        height: 0 + '%'
	    });
	    clearInterval(tick);
	}
	startProgressbar();
	// End ticking machine

	jQuery('.how-its-work-items').click(function () {
		clearInterval(tick);
		var goToThisIndex = jQuery(this).find(".sliderProgressBar").data("slickIndex");
		jQuery('.single-item').slick('slickGoTo', goToThisIndex, false);
		startProgressbar();
	});
	
  $('.faq-accordian .faq-accordian-item:first-child').addClass('active');
		
});


jQuery('.vetted-tech-experts').slick({
  infinite: true,
  autoplay: false,
  speed: 4000,
  autoplaySpeed: 0,
  slidesToShow: 5,
  slidesToScroll: 1,
  focusOnSelect: false,
  arrows: false,
  dots:false,
  accessibility: false,
  touchMove: false,
  pauseOnHover: false,
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 1367,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 1281,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow:3,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 721,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        accessibility: false,
        touchMove: false,
      }
    },
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        accessibility: false,
        touchMove: false,
      }
    }
  ]
});


jQuery('.faq-accordian-title').on('click', function(){
  jQuery('.faq-accordian-item').removeClass('active')
  jQuery(this).parent('.faq-accordian-item').addClass('active')
})
