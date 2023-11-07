// Initialize Wow
new WOW().init();



$('.category-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    arrow: false,
    dots: true,
  });


  $('.testimonial-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrow: false,
    dots: true,
    centerMode: true,
  });


  ////// Accordion 
$('.accordion .quest-title.ac tive1').addClass('active');
$('#accordion-1').slideDown(300).addClass('open');
function close_accordion_section() {
jQuery('.accordion .quest-title').removeClass('active');
jQuery('.accordion .quest-content').slideUp(300).removeClass('open');
}
jQuery('.quest-title').click(function(e) {
// Grab current anchor value
var currentAttrValue = jQuery(this).attr('href');
if(jQuery(e.target).is('.active')) {
close_accordion_section();
}else {
close_accordion_section();
// Add active class to section title
jQuery(this).addClass('active');
// Open up the hidden content panel
jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
}
e.preventDefault();
});
////// Accordion end 



////// tabs generic (nav and tabs in main div)
$('.tab-custom .tab-custom-nav a').click(function(event) {
  $(this).closest('li').siblings('li').children('a').removeClass('current');
  $(this).addClass('current');
  $(this).closest('.tab-custom').children('div.tab-content-panel:not(:hidden)').hide();
  $(this.hash).show();
  event.preventDefault();
  $('.sliderxs').slick('setPosition');
});
////// tabs generic end

////// tabs custom (place nav and tabs anywhere separately)
$('.tabs-custom-nav a').click(function(event) {
  $(this).closest('li').siblings('li').children('a').removeClass('current');
  $(this).addClass('current');
  $(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
  $(this.hash).show();
  event.preventDefault();
  $('.sliderxs').slick('setPosition');
});
////// tabs custom end






// Steps functionality
document.addEventListener("DOMContentLoaded", () => {
  // Targeting the DOM elements
  const formSteps = document.querySelectorAll(".form-step");
  const prevBtn = document.querySelector("[data-step-btn='prev']");
  const nextBtn = document.querySelector("[data-step-btn='next']");

  // Toggle functionality
  const toggleSteps = (stepNumber) => {

      formSteps.forEach(step => step.classList.remove("active"));
      formSteps[stepNumber].classList.add("active")
      // Show previous button
      if (stepNumber === 0) {
          prevBtn.classList.add("hide")
      }
      else {
          prevBtn.classList.remove("hide")
      }

      if (stepNumber === 6) {
        nextBtn.innerText = "submit"
        // nextBtn.classList.add("hide")
      } 
      else {
        // nextBtn.classList.add("show")
        nextBtn.innerText = "Next"
      }


  }

  // Making default active to first input
  let stepNumber = 0;

  toggleSteps(stepNumber)

  nextBtn.addEventListener("click", (e) => {
      e.preventDefault()
      if (stepNumber < formSteps.length) {
          stepNumber++;
          toggleSteps(stepNumber)
      }

  })
  prevBtn.addEventListener("click", (e) => {
      e.preventDefault()
      if (stepNumber > 0) {
          stepNumber--;
          toggleSteps(stepNumber)
      }
  })

})





////// tabs generic (nav and tabs in main div)
$('.tab-custom .tab-custom-nav a').click(function(event) {
  $(this).closest('li').siblings('li').children('a').removeClass('current');
  $(this).addClass('current');
  $(this).closest('.tab-custom').children('div.tab-content-panel:not(:hidden)').hide();
  $(this.hash).show();
  event.preventDefault();
  $('.sliderxs').slick('setPosition');
});
////// tabs generic end

////// tabs custom (place nav and tabs anywhere separately)
$('.tab-suggest-job a').click(function(event) {
  $(this).closest('li').siblings('li').children('a').removeClass('current');
  $(this).addClass('current');
  $(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
  $(this.hash).show();
  event.preventDefault();
  $('.sliderxs').slick('setPosition');
});
////// tabs custom end