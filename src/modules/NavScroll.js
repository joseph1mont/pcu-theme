class NavScroll {
    constructor() {
        window.onscroll = this.scrolled;

    }

    scrolled () {
        const o = document.getElementById("header");
        const navLink = document.querySelectorAll(".nav-link");

        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            o.style.backgroundColor = "#ffffff";
            document.getElementById("logo").src = "http://pointcomfortcom.local/wp-content/themes/POINTCOMFORT-Theme/images/pcu-logo-color.svg";
            navLink.forEach(element => element.style.color = "#42414b");

            // $mainBlack: #42414b;

        
        } else {
            o.style.backgroundColor = "transparent"; 
            document.getElementById("logo").src = "http://pointcomfortcom.local/wp-content/themes/POINTCOMFORT-Theme/images/pcu-logo-white.svg";
            document.getElementById("logo").style.display = "inline"; 
            navLink.forEach(element => element.style.color = "#ffffff80");
        } 

        // Animated logo
        // var a = document.getElementById("animated-logo");
        

        // if (e("#animated-logo").isInViewport() && !e("#animated-logo").hasClass("played")) {
        //     e("#animated-logo").addClass("played");
        //     var a = document.getElementById("animated-logo");
        //     a && a.play()


        
    }


}

export default NavScroll;