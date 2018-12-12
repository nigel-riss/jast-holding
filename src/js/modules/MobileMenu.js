class MobileMenu {
  constructor() {
    this.menuButton = document.querySelector('.menu-button');
    this.menu = document.querySelector('.nav'),
    this.menuLinks = document.querySelectorAll('.main-menu__link');

    this.events();
  }

  events() {
    this.menuButton.addEventListener('click', () => {
      this.toggleMenu();
    });
    // for(let i = 0; i < menuLinks.length; i++) {
    //     let link = menuLinks[i];
    //     link.addEventListener('click', () => {
    //         menuIcon.classList.remove('mobile-icon--active');
    //         mobileMenu.classList.remove('main-menu--active');
    //     });
    // }
  }

  reset() {

  }

  toggleMenu() {
    this.menu.classList.toggle('nav--hidden');
    this.menuButton.classList.toggle('menu-button--close');
  }
}

export default MobileMenu;