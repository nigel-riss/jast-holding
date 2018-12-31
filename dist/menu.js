'use strict';

(function () {
  var menuButton = document.querySelector('.menu-button');
  var menu = document.querySelector('.nav');
  var menuLinks = document.querySelectorAll('.nav__link');


  var events = function () {
    menuButton.addEventListener('click', function () {
      toggleMenu();
    });

    for (var i = 0; i < menuLinks.length; i++) {
        var link = menuLinks[i];
        link.addEventListener('click', function () {
            toggleMenu();
        });
    }
  }


  var reset = function () {
    menu.classList.add('nav--hidden');
    menuButton.classList.remove('menu-button--close');
  };


  var toggleMenu = function () {
    menu.classList.toggle('nav--hidden');
    menuButton.classList.toggle('menu-button--close');
  };

  events();
  reset();
})();