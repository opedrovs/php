export default class Responsive {
    constructor(classNavbar, idBurguer) {
        this.navbar = document.querySelector(classNavbar);
        this.burguer = document.querySelector(idBurguer);
    }

    init() {
        this.clickMenu();
        this.windowResize();
    }

    clickMenu() {
        this.burguer.addEventListener('click', () => {
            if(this.navbar.style.display === 'block') {
                this.navbar.style.display = 'none';
            } else {
                this.navbar.style.display = 'block';
            }
        });
    }

    windowResize() {
        window.addEventListener('resize', () => {
            if(window.innerWidth >= 765) {
                this.navbar.style.display = 'block';
            } else {
                this.navbar.style.display = 'none';
            }
        });
    }
}
