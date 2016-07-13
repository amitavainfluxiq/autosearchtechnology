$(document).ready(function(){


    var windowHeight = $(window).height();

    var topHeight = $('.topnavbar').height();



    var bannerHeight = parseInt(windowHeight) - parseInt(topHeight);

    var windowSize = $(window).width();

    if (screen.width > 1199) {
    $(".homebannerslider").css({
        height: bannerHeight
    });

    }


    else {


        $(".homebannerslider").css({
            height: "auto"
        });
    }

    $('[data-toggle="popover"]').popover();




   /* $('.block5div a ').click(function(){

        console.log('test');
        console.log($(this).text());

        if ($(this).text() == "Show Less")
            $(this).text("Know More")
        else
            $(this).text("Show Less");
    });*/

    setTimeout(click(), 5000);

    function click()
    {
        $(".uparrow").click();
       
    }


$('.bannerarrowscroll').click(function () {
    $('html, body').animate({scrollTop:$('.homeblock1').offset().top}, 'slow');
    return false;
});


    $('.zoompopup1').click(function()
        {
            console.log('popup');
            $('#zoompopup1').modal('show');

        }
    );




$('.zoompopup2').click(function()
        {
            console.log('popup');
            $('#zoompopup2').modal('show');

        }
    );


$('.zoompopup3').click(function()
        {
            console.log('popup');
            $('#zoompopup3').modal('show');

        }
    );


$('.zoompopup4').click(function()
        {
            console.log('popup');
            $('#zoompopup4').modal('show');

        }
    );





$('.zoompopup5').click(function()
        {
            console.log('popup');
            $('#zoompopup5').modal('show');

        }
    );


$('.zoompopup6').click(function()
        {
            console.log('popup');
            $('#zoompopup6').modal('show');

        }
    );


$('.zoompopup7').click(function()
        {
            console.log('popup');
            $('#zoompopup7').modal('show');

        }
    );
	
	$('.zoompopup8').click(function()
        {
            console.log('popup');
            $('#zoompopup8').modal('show');

        }
    );



    $('.referrals1').click(function()
        {
            console.log('popup');
            $('#referrals1').modal('show');

        }
    );


    $('.referrals2').click(function()
        {
            console.log('popup');
            $('#referrals2').modal('show');

        }
    );


    $('.referrals3').click(function()
        {
            console.log('popup');
            $('#referrals3').modal('show');

        }
    );

    $('.referrals4').click(function()
        {
            console.log('popup');
            $('#referrals4').modal('show');

        }
    );


    $('.referrals5').click(function()
        {
            console.log('popup');
            $('#referrals5').modal('show');

        }
    );

    $('.referrals6').click(function()
        {
            console.log('popup');
            $('#referrals6').modal('show');

        }
    );

    $('.referrals7').click(function()
        {
            console.log('popup');
            $('#referrals7').modal('show');

        }
    );

    $('.referrals8').click(function()
        {
            console.log('popup');
            $('#referrals8').modal('show');

        }
    );







    $('.sliderpop5').click(function()
        {
            console.log('popup');
            $('#popupall1').modal('show');

        }
    );


    $('.sliderpop1').click(function()
        {
            console.log('popup');
            $('#popupall2').modal('show');

        }
    );


    $('.sliderpop4').click(function()
        {
            console.log('popup');
            $('#popupall3').modal('show');

        }
    );

    $('.sliderpop8').click(function()
        {
            console.log('popup');
            $('#popupall4').modal('show');

        }
    );


    $('.sliderpop6').click(function()
        {
            console.log('popup');
            $('#popupall5').modal('show');

        }
    );

    $('.sliderpop7').click(function()
        {
            console.log('popup');
            $('#popupall6').modal('show');

        }
    );

    $('.sliderpop2').click(function()
        {
            console.log('popup');
            $('#popupall7').modal('show');

        }
    );

    $('.sliderpop3').click(function()
        {
            console.log('popup');
            $('#popupall8').modal('show');

        }
    );





});


function showmodal1(){

    $('#thankyou_popup').modal('show');

    /*setTimeout(function(){
        $('#thankyou_popup').modal('hide');
    },8000);*/
}
function showmodal2(){

    $('#thankyou_popup1').modal('show');

    /*setTimeout(function(){
     $('#thankyou_popup').modal('hide');
     },8000);*/
}