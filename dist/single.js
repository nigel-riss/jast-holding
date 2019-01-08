'use strict';

(function () {
  var nav = document.querySelector('nav.nav');
  var sections = [];

  var sectionIDToNavClass = {
    '#about': 'nav--about',
    '#projects': 'nav--projects',
    '#partners': 'nav--partners',
    '#contact': 'nav--contact'
  };

  /**
   * Hiding section with sectionID
   * @param {string} sectionID
   */
  var hideSection = function (sectionID) {
    var section = document.querySelector(sectionID);
    section.classList.add('single--hidden');
    section.classList.remove('single--animated');
    nav.classList.remove(sectionIDToNavClass[sectionID]);
  }


  /**
   * Showing section with sectionID
   * @param {string} sectionID 
   */
  var showSection = function (sectionID) {
    hideAllSections();
    var section = document.querySelector(sectionID);
    section.classList.remove('single--hidden');
    section.classList.add('single--animated');
    nav.classList.add(sectionIDToNavClass[sectionID]);
  };


  /**
   * Modifying section with sectionID
   * @param {string} sectionID 
   */
  var modifySection = function (sectionID) {
    var section = document.querySelector(sectionID);
    section.classList.add('single');
    var closeButton = document.createElement('div');
    closeButton.classList.add('close-button');
    (sectionID === "#partners") ? closeButton.classList.add('close-button--dark') : closeButton.classList.remove('close-button--dark');
    section.appendChild(closeButton);
    closeButton.addEventListener('click', function () {
      hideSection(sectionID);
    });
  }


  /**
   * Hiding all sections
   */
  var hideAllSections = function () {
    sections.forEach(function (section) {
      section.classList.add('single--hidden');
    });
    nav.className = 'nav';
  }


  /**
   * Adding events and modifying sections
   */
  var addEvents = function () {
    var links = document.querySelectorAll('.nav__link');
    for (var i = 0; i < links.length; i++) {
      links[i].addEventListener('click', function (evt) {
        evt.preventDefault();
        showSection(evt.target.getAttribute('href'));
      });
      
      modifySection(links[i].getAttribute('href'));
      hideSection(links[i].getAttribute('href'));
      sections.push(document.querySelector(links[i].getAttribute('href')));
    }
  }

  if (window.innerWidth >= 1000) {
    addEvents();
  }
})();