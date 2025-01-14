$(document).ready(function() {


    $home = $("#home");
    $about = $("#about");
    $contact = $("#contact");
    $cs = $("#cs");
    $da = $("#da");

    $underline = $("#navline");

    
    $home.on("mouseenter", function() {
        $underline.css("left", "25px");
        $underline.css("width", "3em");
    })
    $about.on("mouseenter", function() {
        $underline.css("left", "98px");
        $underline.css("width", "3.25em");
    })
    $contact.on("mouseenter", function() {
        $underline.css("left", "174px");
        $underline.css("width", "4em");
    })
    $cs.on("mouseenter", function() {
        $underline.css("left", "261px");
        $underline.css("width", "8.5em");
    })
    $da.on("mouseenter", function() {
        $underline.css("left", "421px");
        $underline.css("width", "5.5em");
    })
    
});