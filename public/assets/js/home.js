let items = document.querySelectorAll('.carousel .carousel-item')

		items.forEach((el) => {
			const minPerSlide = 4;
			let next = el.nextElementSibling;
			for (var i=1; i<minPerSlide; i++) {
				if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

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
  