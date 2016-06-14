$(document).ready(function(){
$('.bannerarrowscroll').click(function () {
    $('html, body').animate({scrollTop:$('.homeblock1').offset().top}, 'slow');
    return false;
});


});


