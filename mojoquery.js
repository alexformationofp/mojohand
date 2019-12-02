jQuery(document).ready(function () {

    

    $(".petiteimage").hover(function () {
        $(this).toggleClass("grossi");
    });

    $(".petiteimage").click(function () {
        var id = document.getElementById(this);
        var id = $(this).attr("id");
        $idpop = '#n' + id;
        $($idpop).css('display', 'block');
        
     });
    
    $pre = $(".precedent").closest("div").attr("id");
    $(".precedent").click(function () {
        $($pre).css('display', 'none');
    });
   
   


    $(".popeup").click(function () {
        $('.pop').css('display', 'none');
    });


    $("#menumobile").click(function () {
        $("footer").toggleClass("visible");
        console.log("test");
    });


    $("#retour").click(function () {
        $("footer").toggleClass("visible");
    });



    $(window).scroll(function (e) {
        parallax();
    });

    //PARALLAX FUNCTION
    function parallax() {
        scrolled = $(window).scrollTop();
        $('.bg').css('top', -(scrolled * 0.1) + 'px');
        couleur = (scrolled * 0.1);
        if (scrolled > 35) {
            $('.devant').addClass("clair");
            $('.devant').removeClass("noirci");
            $('.derriere').addClass("noirci");
            $('.derriere').removeClass("clair");
        } else {

            $('.devant').addClass("noirci");
            $('.devant').removeClass("clair");
            $('.derriere').addClass("clair");
            $('.derriere').removeClass("noirci");
        };
    };
});