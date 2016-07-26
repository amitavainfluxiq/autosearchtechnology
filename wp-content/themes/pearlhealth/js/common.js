$(document).ready(function(){


    $('.carousel').carousel('pause');




    $('.btnblue').click(function() {



        alert($(this).index());



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
