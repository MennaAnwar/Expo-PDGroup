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

/* Video custom player */
$(document).ready(function() {
    var video = $('#custom-video').get(0); // Access the video DOM element

    // Play button click event
    $('#custom-play-btn').on('click', function() {
        video.play();
        $(this).hide(); // Hide the play button
        $('#custom-pause-btn').show(); // Show the pause button
        $('.video-overlay-text').hide(); // Hide overlay text when playing
    });

    // Pause button click event
    $('#custom-pause-btn').on('click', function() {
        video.pause();
        $(this).hide(); // Hide the pause button
        $('#custom-play-btn').show(); // Show the play button
        $('.video-overlay-text').hide(); // Show overlay text when paused
    });

    // Show the appropriate button on hover
    $('.video-container').hover(function() {
        if (!video.paused) {
            $('#custom-pause-btn').show(); // Show pause button if video is playing
        } else {
            $('#custom-play-btn').show(); // Show play button if video is paused
        }
    }, function() {
        if (!video.paused) {
            $('#custom-pause-btn').hide(); // Hide pause button when not hovering
        }
    });

    // Show play button when video pauses
    $('#custom-video').on('pause', function() {
        $('#custom-play-btn').show();
        $('#custom-pause-btn').hide();
        $('.video-overlay-text').hide(); // Show overlay text when paused
    });

    // Hide play button and overlay text when video plays
    $('#custom-video').on('play', function() {
        $('#custom-play-btn').hide();
        $('#custom-pause-btn').show();
        $('.video-overlay-text').hide(); // Hide overlay text when playing
    });

    // Reset to the poster and show overlay when the video ends
    $('#custom-video').on('ended', function() {
        video.load(); // Reload the video (to display the poster again)
        $('#custom-play-btn').show(); // Show the play button
        $('#custom-pause-btn').hide(); // Hide the pause button
        $('.video-overlay-text').show(); // Show overlay text when video ends
    });
});

