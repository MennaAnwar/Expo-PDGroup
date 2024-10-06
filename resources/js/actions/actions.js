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


