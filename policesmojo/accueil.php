<!DOCTYPE html>
<html>

<head>
    <title>Mojo Hand-Groupe-Musique-Belfort-Franche-Comté</title>
    <meta name="description" content="Mojo Hand est un groupe de musique de Belfort, en Franche Comté. Du blues, du rock, en concert dans la région, en suisse ou ailleurs !" />
    <meta name="keywords" content="musique-franche-comte-belfort-territoire de belfort-franche comte-blues-rockabilly-swing-boogie-harmonica-guitare-concerts" />
    <meta name="author" content="Alexandre BIELINSKI" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="mojohandtest.css">
    <link rel="stylesheet" media="only screen and (max-width: 1150px)" href="mojohand1120.css">
    <link rel="stylesheet" media="only screen and (max-width: 1200px)" href="mojohand1200.css">
    <link rel="stylesheet" media="only screen and (max-width: 900px)" href="mojohand850.css">
    <link rel="stylesheet" media="only screen and (max-width: 950px)" href="mojohand950.css">
    <link rel="stylesheet" media="only screen and (max-width: 600px)" href="mojohand600.css">
    <script type="text/javascript" src="jQuery-1.9.1.js"></script>
    <script type="text/javascript" src="mojoquery.js"></script>
    <script type="text/javascript" src="resize.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="icones/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icones/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icones/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icones/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icones/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icones/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icones/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icones/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icones/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icones/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icones/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icones/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icones/favicon-16x16.png">
    <link rel="manifest" href="icones/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icones/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-60465674-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    <body>
        <header>
            <div class="relative centre trans">
                <a href="index.php">
                    <img alt="Logo MOJOHAND" src="imagesmojo/logomojohand.png">
                </a>
                <img id="menumobile" src="imagesmojo/menu1.png" alt="menu">
                <h1 class="logo">Blues. Swing. Boogie. Rock.</h1>
            </div>
        </header>

       

        </div>

     <!--   <div class="bg"></div>
        <div id="degrade"></div>    -->
       
        <div id="slider">
            <figure>
                <img src="imagesmojo/accueilfimu.jpg" alt="Mojo Hand au FIMU">
                <img src="imagesmojo/accueilgillesfimu.jpg" alt="MojoHand : Le groupe">
                <img src="imagesmojo/accueilcafe.jpg" alt="Mojo Hand aux Moraines">
                <img src="imagesmojo/accueilmoraines.JPG" alt="Didier on drums">
                <img src="imagesmojo/accueilfimu.jpg" alt="Mojo Hand au FIMU">
            </figure>
        </div>
    </div>

    
        <section class="trans principale centre accueil">
           <div class="intro">
                <h2>Blues.</h2>
                <h2>Swing.</h2>
                <h2>Boogie.</h2>
                <h2>Rock.</h2>
                <p>Mojo Hand c'est un quatuor créé par Gilles Fahy dans les années 2000, voué au blues sous toutes ses formes, spécialement celui qui est bourré d'énergie. Nous sommes là pour vous faire partager notre passion du swing, du boogie, du rockabilly et tutti-quanti en dépoussiérant les grands standards du genre.</p>
            </div>
        </section>

        <footer class="trans degradebas">
            <div class="relative centre">
                <nav>
                    <a id="l1" href="index.php">Accueil</a>
                    <a id="l2" href="musique-belfort-franche-comte-suisse-alsace-concert-blues-rock-swing.php">Music</a>
                    <a id="l3" href="photos-groupe-musique-belfort-franche-comte-suisse-fimu-festival-concert-montbeliard.php">Pictures</a>
                    <a id="l4" href="concert-musique-belfort-franche-comte-suisse-alsace-blues-rock-swing-guitare-harmonica.php">Dates</a>
                    <a id="l5" href="suivre-musique-belfort-franche-comte-suisse-alsace-blues-rock-swing-guitare-harmonica.php">
                        <img class="icone" alt="icone facebook" src="imagesmojo/facebook.png" width="20">
                    </a>
                    <a id="retour">
                        <img src="imagesmojo/retour.png" alt="retour" width="50">
                    </a>
                </nav>
            </div>

        </footer>

    <div class="invisible">
        
        <ul>
            <?php 
                $sql='SELECT id,chemingrande,texte,lieu,cheminmini FROM photos;';
                $req=mysql_query($sql);
                while($data=mysql_fetch_assoc($req)) { 
                    echo '<li class="mini"><img id="'.$data[ 'id'].'" src="'.$data['chemingrande'].'" alt="'.$data[ 'texte'].'"></li>';
                    echo '<li class="mini"><img id="'.$data[ 'id'].'" src="'.$data['cheminmini'].'" alt="'.$data[ 'texte'].'"></li>';
                }; 
            ?>
        </ul>
    </div>
</body>
</html>