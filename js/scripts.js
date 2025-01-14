$(document).ready(function() {


    $home = $("#home");
    $about = $("#about");
    $contact = $("#contacts");
    $cs = $("#cs");
    $da = $("#da");

    $underline = $("#navline");

    //Sets default position for the navbar underline
    var initialPosition = "25px"; //Default to home
    var initialWidth = "3em"; //Default to home width

    if (window.location.pathname.includes("about")) {
        initialPosition = "98px";
        initialWidth = "3.25em";
    } else if (window.location.pathname.includes("contacts")) {
        initialPosition = "174px";
        initialWidth = "4em";
    } else if (window.location.pathname.includes("cs")) {
        initialPosition = "261px";
        initialWidth = "8.5em";
    } else if (window.location.pathname.includes("da")) {
        initialPosition = "421px";
        initialWidth = "5.5em";
    }

    //Temporarily disables transition animation for the navbar so it doesn't appear before it reaches its initial location
    $underline.css("transition", "none");
    $underline.css("left", initialPosition);
    $underline.css("width", initialWidth);

    //Makes the navbar underline visible
    $underline.css("background-color", "var(--blue-color)")

    //Re-enables transition after setting the initial position
    setTimeout(function() {
        $underline.css("transition", "left 0.2s, width 0.2s");
    }, 100);

    //Animations between pages in navbar
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