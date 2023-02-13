import Glide from "@glidejs/glide"

class HeroSlider {
    constructor() {
        const allSlideShows = document.querySelectorAll(".hero-slider");
        
        allSlideShows.forEach(function (currentSlideShow) {
            var glide = new Glide(".hero-slider", {
                type: "carousel",
                perView: 2,
                autoplay: 3000
            })

            glide.mount()
        })   
    }
}

export default HeroSlider;