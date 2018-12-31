'use strict';

(function () {
  var links = document.querySelectorAll('.nav__link');
  var sections = [];

  var hideSection = function (sectionID) {
    var section = document.querySelector(sectionID);
    section.classList.add('single--hidden');
  }
  
  var showSection = function (sectionID) {
    hideAllSections();
    var section = document.querySelector(sectionID);
    section.classList.remove('single--hidden');
  };
  
  var modifySection = function (sectionID) {
    var section = document.querySelector(sectionID);
    section.classList.add('single');
  }

  var hideAllSections = function () {
    sections.forEach(function (section) {
      section.classList.add('single--hidden');
    })
  }


  var addEvents = function () {
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

  addEvents();
})();