<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Burger</title>
    <?php
    include('include/head.php');
    ?>
</head>
<body>

<?php
include('include/header.php');
?>

<!----------------------- CONCEPT PRESENTATION---------------------------------->
<div class="container blockTop back3">
    <section class="row">
        <!--<div class="col-md-6 col-xs-12">
            <img id="logo-flag" src="http://img1.imagilive.com/0917/logobiofr.PNG" alt="bio et francais">
        </div>-->
        <div class="row">
            <div class="titre">
                <article>
                    <h1>Bug Burger, j’en fourmille d’envie !</h1>
            </div>
        </div>
        <div class=" col-md-offset-2 col-md-8 hidden-xs">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" id="logo" src="http://img1.imagilive.com/0917/Logobiofrench.jpg"></div>

                    <div class="item"><img class="large" alt="photo"
                                           src="http://france3-regions.francetvinfo.fr/auvergne-rhone-alpes/sites/regions_france3/files/styles/top_big/public/assets/images/2017/08/21/burger2-3220007.jpg?itok=oqHuuksl">
                    </div>
                    <div class="item"><img class="large" alt="photo"
                                           src="https://www.insectecomestiblebio.com/wp-content/uploads/2014/08/insectes-comestibles-bio-poudre-proteines-elevage-manger-vente-acheter-liste-vers-de-bambou.jpg">
                    </div>
                    <div class="item"><img class="large" alt="photo" src="https://goo.gl/SQ9FME"></div>
                    <div class="item"><img alt="photo"
                                           src="https://ak6.picdn.net/shutterstock/videos/13632746/thumb/10.jpg"></div>
                </div>
                <a class="left carousel-control" href="#carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="row yellow">
            <h2 class="title-white"><span class="glyphicon glyphicon-check"></span> Concept </h2>
            <p class="text-white">
                Ce type d’alimentation est déjà ancré dans la plupart des cultures aussi bien en Asie ou
                dans certaines contrées africaines. Les insectes sont l’avenir de la consommation des
                populations. Les variations de goûts sont notées selon la forme de chaque insecte, de sa
                couleur, de sa texture et la façon dont il est cuisiné. Ce qui ouvre un monde de
                possibilités à tester au plus vite chez Bug Burger !
            </p>
        </div>

        <div class="row white">

            <h2 class="title-black"><span class="glyphicon glyphicon-leaf"></span> Sain</h2>
            <p>
                Nos insectes ne mangent que les meilleurs légumes et céréales, vivent agréablement et à leur
                rythme. Nous leur donnons tout simplement ce dont ils ont besoin, et nous le choisissons
                bien.
            </p>
        </div>
        <div class="row yellow">

            <h2 class="title-white"><span class="glyphicon glyphicon-map-marker"></span> Local</h2>
            <p class="text-white">
                Élevés en France, nos grillons, nos vers de farine, nos sauterelles sont des produits du
                terroir.. Les gens du coin sont unanimes : ils vont très bien avec la viande et la salade..
            </p>
        </div>

        <div class="row white">
            <h2 class="title-black"><span class="glyphicon glyphicon-grain"></span> 100% naturel</h2>
            <p>Vous pouvez les ins(p)ecter autant que vous voulez, nos insectes sont élevés par des
                passionnés et aucun produit artificiel n'est utilisé pour les faire grandir.
            </p>
        </div>
    </section>
</div>
<!-----------------------END OF CONCEPT PRESENTATION---------------------------------->
<footer>
    <?php
    include('include/footer.php');
    ?>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-  hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>

</html>
