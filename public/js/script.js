//My Script
$(document).ready(function() {

    //duplicate pagination nav after reviews list
    var pageNav = $("section#reviews nav");
    pageNav.clone().appendTo("section#reviews");


});