import * as Headroom from 'headroom.js/dist/headroom.js';
import * as Flickity from 'flickity';
import fizzyUIUtils from 'fizzy-ui-utils';
import * as ModalVideo from 'modal-video';

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
    
    setTimeout(function () {
      if (document.querySelector('.js-carousel')) {
        new Flickity( '.js-carousel', {
          wrapAround: true,
          cellAlign: "left",
        });
      }
      
      if (document.querySelector('.js-carousel-controlled')) {
        let flktyControlled = new Flickity( '.js-carousel-controlled', {
          cellAlign: "left",
          pageDots: false,
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
    }, 2000)
    
    new ModalVideo('.js-modal-video');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
