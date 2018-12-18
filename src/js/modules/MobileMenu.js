class MobileMenu {
  constructor() {
    this.menuButton = document.querySelector('.menu-button');
    this.menu = document.querySelector('.nav'),
    this.menuLinks = document.querySelectorAll('.nav__link');

    this.events();
  }

  events() {
    this.menuButton.addEventListener('click', () => {
      this.toggleMenu();
    });

    for(let i = 0; i < this.menuLinks.length; i++) {
        let link = this.menuLinks[i];
        link.addEventListener('click', () => {
            this.toggleMenu();
        });
    }
  }

  reset() {

  }

  toggleMenu() {
    this.menu.classList.toggle('nav--hidden');
    this.menuButton.classList.toggle('menu-button--close');
  }
}

export default MobileMenu;