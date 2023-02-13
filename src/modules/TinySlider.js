import { tns } from "../../node_modules/tiny-slider/src/tiny-slider"

class TinySlider {
    constructor() {        

      var slider = tns({
        "container": "#autoplay",
        "items": 3,
        "speed": 300,
        "autoplay": true,
        "autoplayHoverPause": true,
        "autoplayTimeout": 3500,
        "autoplayText": [
          "▶",
          "❚❚"
        ],
        "swipeAngle": false
      });


      
    }
}

export default TinySlider;