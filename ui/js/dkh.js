(function() {
  'use strict';

  // If IE8 - do nothing.
  if (window.isOldIE) {
    return;
  }

  var $ = document,

  DKH = {
    init: function() {
      this.menu.init( $.getElementById('toggle-nav'), $.getElementById('site-menu') );
    },

    // Mobile nav
    menu: {
      init: function(button, ul) {
        this.button = button;
        this.ul = ul;
        this.state = 'closed';

        this.addEvents();
      },

      addEvents: function() {
        var self = this,
          trigger = self.button;

        trigger.addEventListener('click', function() {
          self.toggle();
        });
      },

      // When clicking the trigger
      toggle: function() {
        if (this.state === 'closed') {
          this.slideDown();
        } else {
          this.slideUp();
        }
      },

      slideDown: function() {
        var ul = this.ul;

        ul.className = 'open';
        this.state = 'open';
      },

      slideUp: function() {
        var ul = this.ul;

        ul.className = 'closed';
        this.state = 'closed';
      }
    }
  };

  $.addEventListener( 'DOMContentLoaded', function () {
      DKH.init();
  }, false );

})();

