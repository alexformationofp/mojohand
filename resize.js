jQuery(document).ready(function () {

    function adpaterALaTailleDeLaFenetre() {
        var largeur = document.documentElement.clientWidth,
            hauteur = document.documentElement.clientHeight;



        if (largeur < 1170) {
            //   $('nav').addClass("degradebas");
            $('footer.gene').addClass("degradebas");
        };

        if (largeur > 1207) {
            // $('nav').removeClass("degradebas");
            $('footer.gene').removeClass("degradebas");
        };

        if (hauteur < 666) {
            $('footer.gene').addClass("degradebas");
        }

        var hauteurslider = largeur;
        if (largeur > 600) {
            $('#slider').css('height', largeur + 'px');
        }
        if (largeur < 600) {
            $('#slider').css('height', 'auto');
        }
        var hauteurpop = hauteur-5;
        $('.popeup img').css('max-height', hauteurpop + 'px');
        
      /*  if (largeur>900){
            var hauteurpop = hauteur-5;
            $('.popeup img').css('height', hauteurpop + 'px');
        }
        if (largeur<900){
            
            $('.popeup img').css('width', '100%');
        }

        
            
        
        /*var quotient = 3.6;
        var largeurframe = largeur/quotient;
        var hauteurframe = largeurframe/4*3;
        if(largeur<1201){
            $('iframe').css('height', hauteurframe + 'px');
            $('iframe').css('width', largeurframe + 'px');
        }else{
            $('iframe').css('height', 1200/3.6*3/4 + 'px');
            $('iframe').css('width', 1200/3.6 + 'px');
        }           ;*/
        

    };

    // Une fonction de compatibilité pour gérer les évènements
    function addEvent(element, type, listener) {
        if (element.addEventListener) {
            element.addEventListener(type, listener, false);
        } else if (element.attachEvent) {
            element.attachEvent("on" + type, listener);
        }
    }

    // On exécute la fonction une première fois au chargement de la page
    addEvent(window, "load", adpaterALaTailleDeLaFenetre);
    // Puis à chaque fois que la fenêtre est redimensionnée
    addEvent(window, "resize", adpaterALaTailleDeLaFenetre);



});