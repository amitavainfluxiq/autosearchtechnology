$(document).ready(function(){


    $('.carousel').carousel('pause');




    $('.btnblue').click(function() {



        //alert($('.btnblue').index(this));
        $('.carousel').carousel($('.btnblue').index(this));
        //scrolltotop

        $('html, body').animate({scrollTop:$('#myCarousel').offset().top}, 'slow');
        return false;

    });





$('.bannerarrowscroll').click(function () {
    $('html, body').animate({scrollTop:$('.homeblock1').offset().top}, 'slow');
    return false;
});


    $('.referrals8').click(function()
        {
            console.log('popup');
            $('#referrals8').modal('show');

        }
    );





});
