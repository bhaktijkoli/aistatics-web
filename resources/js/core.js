try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('jquery.easing');
    window.WOW = require('wow.js')
    window.owlCarousel = require('owl.carousel')
    window.isotope = require('isotope-layout')
} catch (e) {
  console.log(e);
}

require('./core/mobile-nav')
