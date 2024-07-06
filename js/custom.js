// Home Page Accordian
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

