import * as Headroom from 'headroom.js/dist/headroom.js';
import * as Flickity from 'flickity';
import fizzyUIUtils from 'fizzy-ui-utils';
import * as ModalVideo from 'modal-video';
import * as ScrollReveal from 'scrollreveal';

export default {
  init() {
    // JavaScript to be fired on all pages
    // const $ = window.jQuery;
    
    var myElement = document.querySelector("header.banner");
    // construct an instance of Headroom, passing the element
    var headroom  = new Headroom(myElement, {
      offset: 205,
      tolerance: 5,
      classes: {
        initial: "animated",
        pinned: "slideDown",
        unpinned: "slideUp",
      },
    });
    // initialise
    headroom.init();
    
    document.addEventListener("DOMContentLoaded", function() {
      if (document.querySelector('.js-carousel')) {
        new Flickity( '.js-carousel', {
          wrapAround: true,
          cellAlign: "left",
          adaptiveHeight: true,
        });
      }
      
      if (document.querySelector('.js-carousel-controlled')) {
        let flktyControlled = new Flickity( '.js-carousel-controlled', {
          cellAlign: "left",
          pageDots: false,
          adaptiveHeight: true,
        });
        
        // Add control buttons
        var controlButtonGroup = document.querySelector('.slider-controls');
        var controlButtons = document.querySelectorAll('.slider-controls button');
        controlButtons = fizzyUIUtils.makeArray( controlButtons );
        controlButtonGroup.addEventListener( 'click', function( event ) {
          var index = controlButtons.indexOf( event.target );
          flktyControlled.select( index );
        });
        
        // Set active button
        flktyControlled.on( 'change', function( index ) {
          document.getElementById("slider-control-" + index).focus();
        });
      }
    });
    
    new ModalVideo('.js-modal-video');
    
    window.sr = ScrollReveal();
    window.sr.reveal('.js-sr');
    window.sr.reveal('.js-sr-set-1', {}, 100);
    window.sr.reveal('.js-sr-set-2', {}, 100);
    window.sr.reveal('.js-sr-set-3', {}, 100);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
