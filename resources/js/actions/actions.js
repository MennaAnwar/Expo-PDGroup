/* Sidebar */

$(document).ready(function () {
    $("#sidebarCollapse").on("click", function () {
        $("#sidebar").addClass("active");
        $(".overlay").addClass("visible");
    });

    $("#sidebarCollapseX").on("click", function () {
        $(".overlay").removeClass("visible");
        $("#sidebar").removeClass("active");
    });

    $(".overlay").on("click", function () {
        $("#sidebar").removeClass("active");
        $(".overlay").removeClass("visible");
    });
});

// view zommed images

/* const activeImage = document.getElementById("active-image").src;
const zoomedImg = document.getElementById("zoomed-img").src;

$(".zoom")
    .on("mousemove", function (e) {
        const zoomer = $(this);
        const offsetX = e.offsetX || e.touches[0].pageX;
        const offsetY = e.offsetY || e.touches[0].pageY;
        const x = (offsetX / zoomer.width()) * 100;
        const y = (offsetY / zoomer.height()) * 100;
        zoomer.find("img").css("transform-origin", `${x}% ${y}%`);
        zoomer.find("img").css("transform", "scale(2)");
    })
    .on("mouseleave", function () {
        $(this).find("img").css("transform", "scale(1)");
    });
 */
