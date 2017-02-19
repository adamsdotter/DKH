(function() {
  'use strict';

  // If IE8 - do nothing.
  if (window.isOldIE) {
    return;
  }

  var $ = document,

  DKH = {
    init: function() {
      var menuBtn = $.getElementById('toggle-nav');
      var menuList = $.getElementById('site-menu');

      this.menu.init(menuBtn, menuList);
      this.stickyNav.init();
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
    },

    stickyNav: {
      init: function() {
        var self = this;
        this.page = $.querySelector('html');
        this.header = $.querySelector('header');

        this.scrollTop;
        this.navHeight = this.getHeaderHeight();

        window.addEventListener('scroll', function() {
          self.handleScroll.call(self);
        });
      },

      getHeaderHeight: function() {
        return this.header.offsetHeight;
      },

      handleScroll: function() {
        this.scrollTop = window.scrollY;

        if (this.scrollTop >= this.navHeight) {
          this.addSticky();
        } else {
          this.removeSticky();
        }
      },

      hasClass: function() {
        return this.page.classList.contains('sticky');
      },

      addSticky: function() {
        if (!this.hasClass()) {
            this.page.classList.add('sticky');
        }
      },

      removeSticky: function() {
        if (this.hasClass()) {
          this.page.classList.remove('sticky');
        }
      },

      debounce: function(fn, time, context) {
        clearTimeout(fn.delay);

        fn.delay = setTimeout(function(){
            fn.call(context);
        }, time);
      }
    }
  };

  $.addEventListener('DOMContentLoaded', function () {
      DKH.init();
  }, false );

})();
