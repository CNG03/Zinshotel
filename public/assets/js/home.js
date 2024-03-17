document.addEventListener('DOMContentLoaded', function () {
    var floatingDiv = document.getElementById('floatingDiv');
  
    window.addEventListener('scroll', function () {
      var scrollPosition = window.scrollY;
  
      if (scrollPosition >= 100) {
        floatingDiv.style.display = 'block';
      } else {
        floatingDiv.style.display = 'none';
      }
    });
  });
  



document.getElementById("toggleMenu").addEventListener("click", function() {
    document.getElementById("menu").style.display = "block";
    document.getElementById("menuOverlay").style.display = "block";
});
  
document.getElementById("closeMenu").addEventListener("click", function() {
    document.getElementById("menu").style.display = "none";
    document.getElementById("menuOverlay").style.display = "none";
});




var accommodationCategory = document.querySelector('.accommodation-category');
var slider = accommodationCategory.querySelector('.block_wrapper');
var slideIndex = 0;
function slideLeft() {
  var slideMargin = parseInt(getComputedStyle(accommodationCategory.querySelector('.sub-form')).marginRight);
  var slideWidth = accommodationCategory.querySelector('.sub-form').offsetWidth + slideMargin;
  var maxSlideIndex = slider.children.length;
  if (slideIndex === 0) {
    slideIndex = maxSlideIndex - 4;
    slider.style.transform = 'translateX(' + (-slideWidth * slideIndex) + 'px)';
  }else if (slideIndex === maxSlideIndex - 4) {
    slideIndex = 0;
    slider.style.transform = 'translateX(' + (-slideWidth * slideIndex) + 'px)';
  } else {
    slideIndex++;
    slider.style.transform = 'translateX(' + (-slideWidth * slideIndex) + 'px)';
  }
  slider.style.transform = 'translateX(' + (-slideWidth * slideIndex) + 'px)';
}
function slideRight() {
  var slideMargin = parseInt(getComputedStyle(accommodationCategory.querySelector('.sub-form')).marginRight);
  var slideWidth = accommodationCategory.querySelector('.sub-form').offsetWidth + slideMargin;
  var maxSlideIndex = slider.children.length - 4;
  if (slideIndex === maxSlideIndex) {
    slideIndex = 0;
    slider.style.transform = 'translateX(' + (-slideWidth * slideIndex) + 'px)';
  } else {
    slideIndex++;
    slider.style.transform = 'translateX(' + (-slideWidth * slideIndex) + 'px)';
  }
}


  