// import $ from 'jquery'

export default class Tupac {
  constructor(el) {
    
    this.el = el

    let slideIndex = 0
    let x = document.getElementsByClassName('slider__slide')

		function carousel() {
	    let i
	    let x = document.getElementsByClassName('slider__slide')
	    for (i = 0; i < x.length; i++) {
	      x[i].classList.remove('active')
	    }
	    slideIndex++
	    if (slideIndex > x.length) { slideIndex = 1 } 
	    x[slideIndex-1].classList.add('active')
		  setTimeout(carousel, 5000)
		}
		carousel()
  }
}
