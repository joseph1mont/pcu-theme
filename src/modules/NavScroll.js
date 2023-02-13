class NavScroll {
    constructor() {
        window.onscroll = this.scrolled;
    }

    scrolled () {
        
        let navbarColor = document.getElementById("header");
        var ttt = document.querySelector('.site-header__logo');
        // document.querySelector('.site-header__logo').src = '../../images/hero-image.png'; 
        
        
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100 ) {
            // navbarColor.style.backgroundColor = "white";
            navbarColor.style.backgroundColor = "transparent";
        } else {
            navbarColor.style.backgroundColor = "transparent";
            // document.querySelector('.site-header__logo').src = '../../images/pcu-logo-white.svg';
        }

        
    }
}

export default NavScroll;