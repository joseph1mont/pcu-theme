class Counters {
    constructor() {   
        jQuery(document).ready(function(e) {

            e("#left-stat").length && e(window).on("scroll", function() {
                if (e("#left-stat").isInViewport() && !e("#left-stat").hasClass("animated")) {
                    var n = e("#left-stat").attr("data-value");
                    e("#left-stat").addClass("animated"),
                    o("#left-stat", 0, n, 3e3)
                }
                if (e("#middle-stat").isInViewport() && !e("#middle-stat").hasClass("animated")) {
                    var t = e("#middle-stat").attr("data-value");
                    e("#middle-stat").addClass("animated"),
                    o("#middle-stat", 0, t, 3e3)
                }
                if (e("#animated-logo").isInViewport() && !e("#animated-logo").hasClass("played")) {
                    e("#animated-logo").addClass("played");
                    var a = document.getElementById("animated-logo");
                    a && a.play()
                }
            });
        })

}};

export default Counters;
