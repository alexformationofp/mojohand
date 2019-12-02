<!DOCTYPE html>
<?php include ( 'connect.php'); ?>

<html>

<head>
    <title>Mojo-Hand-Blues-Galerie-Photos</title>
    <meta name="description" content="Galerie de photos du quartet de blues Mojo Hand, originaire de Belfort en Franche Comté. De l'harmonica, de la guitare et une section rythmique bourrée de swing." />
    <meta name="keywords" content="musique-blues-festival-scene-france-bleu-fimu- 2014-fimu-2014-harmonica-guitare-concerts-pres-la-rose" />
    <meta name="author" content="Alexandre Bielinski" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="mojohandtest.css">
    <link rel="stylesheet" media="only screen and (max-width: 1150px)" href="mojohand1150.css">
    <link rel="stylesheet" media="only screen and (max-width: 900px)" href="mojohand900.css">
    <link rel="stylesheet" media="only screen and (max-width: 600px)" href="mojohand600.css">


    <link rel="apple-touch-icon" sizes="57x57" href="icones/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icones/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icones/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icones/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icones/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icones/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icones/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icones/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icones/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="icones/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icones/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icones/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icones/favicon-16x16.png">
    <link rel="manifest" href="icones/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icones/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.parallax.js"></script>
    <script type="text/javascript" src="mojoquery.js"></script>
    <script type="text/javascript" src="resize.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60887726-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>


<body>
   
    
   
    <header>
        <div class="relative centre trans">
            <a href="index.php">
                <img alt="Logo MOJOHAND" src="imagesmojo/logomojohand.png">
            </a>
            <img id="menumobile" src="imagesmojo/menu1.png" alt="menu">
            <h1 class="logo">Gallery</h1>
        </div>
    </header>

    <div class="fader derriere clair trans"></div>

    <section class="centre principale trans">
        <article class="gallery">
            <h2>Le Mojo au FIMU 2014</h2>
            <ul class="miniatures">
                <?php $sql='SELECT id,chemingrande,texte,lieu,cheminmini FROM photos WHERE lieu="FIMU";' ; $req=mysql_query($sql); while($data=mysql_fetch_assoc($req)) { echo '<li class="mini"><img class="trans petiteimage" src="'.$data[ 'cheminmini']. '" id="'.$data['id'].'" alt="'.$data[ 'texte']. '"></li>'; }; ?>
            </ul>
        </article>
        
        <article class="gallery">
            <h2>L'auberge des Moraines 2015</h2>
            <ul class="miniatures">
                <?php $sql='SELECT id,chemingrande,texte,lieu,cheminmini FROM photos WHERE lieu="moraines2015";' ; $req=mysql_query($sql); while($data=mysql_fetch_assoc($req)) { echo '<li class="mini"><img class="trans petiteimage" src="'.$data[ 'cheminmini']. '" id="'.$data['id'].'" alt="'.$data[ 'texte']. '"></li>'; }; ?>
            </ul>
        </article>
        
        
        <article class="gallery">
            <h2>Le Près-la-Rose 2013</h2>
            <ul class="miniatures">
                <?php $sql='SELECT id,chemingrande,texte,lieu,cheminmini FROM photos WHERE lieu="preslarose2013";' ; $req=mysql_query($sql); while($data=mysql_fetch_assoc($req)) { echo '<li class="mini"><img class="trans petiteimage" src="'.$data[ 'cheminmini']. '" id="'.$data['id'].'" alt="'.$data[ 'texte']. '"></li>'; }; ?>
            </ul>
        </article>

    </section>

    <footer class="trans degradebas">

        <nav class="relative centre">
            <div class="sousnav">
                <a id="l1" href="index.php">Accueil</a>
                <a id="l2" href="musique-belfort-franche-comte-suisse-alsace-concert-blues-rock-swing.php">Music</a>
                <a id="l3" href="groupe-musique-belfort-franche-comte-suisse-alsace-concert-blues-rock-swing-basse-batterie-guitare-harmonica.php">The band</a>
                <a id="l4" href="concert-musique-belfort-franche-comte-suisse-alsace-blues-rock-swing-guitare-harmonica.php">Dates</a>
            </div>
            <div class="social">
                <a id="l5" hreflang="" href="https://plus.google.com/104555331778374043611" rel="publisher">
                    <img src="imagesmojo/google.png" class="icone" alt="Google+" width="20">
                </a>
                <a id="l6" href="suivre-musique-belfort-franche-comte-suisse-alsace-blues-rock-swing-guitare-harmonica.php">
                    <img class="icone" alt="icone facebook" src="imagesmojo/facebook.png" width="20">
                </a>
            </div>
            <a id="retour">
                <img src="imagesmojo/retour.png" alt="retour" width="50">
            </a>
        </nav>

    </footer>
    <div id="container" class="container">
        <ul id="scene" class="scene">
            <li class="layer" data-depth="1.00">
                <img src="imagesmojo/layer4.png">
            </li>
            <li class="layer" data-depth="0.80">
                <img src="imagesmojo/layer3.png">
            </li>
            <li class="layer" data-depth="0.60">
                <img src="imagesmojo/layer2.png">
            </li>
            <li class="layer" data-depth="0.40">
                <img src="imagesmojo/layer1.png">
            </li>
        </ul>
    </div>

    <script>
        $('#scene').parallax();
    </script>
    
    
    <?php $sql='SELECT id,chemingrande,texte,lieu,cheminmini FROM photos;' ; $req=mysql_query($sql); while($data=mysql_fetch_assoc($req)) { 
    echo '<div class="pop" id="n'.$data['id'].'"><div class="precedent"><img src="imagesmojo/avant" alt="Précédente"></div><div class="popeup"><img src="'.$data['chemingrande'].'" alt="'.$data['texte'].'"></div><div class="suivant"><img src="imagesmojo/apres" alt="Suivante"></div></div>';
}
    ?> 
    
    
 

</body>

</html>





