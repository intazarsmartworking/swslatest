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
}); 