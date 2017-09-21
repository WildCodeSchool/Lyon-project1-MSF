<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nos restaurants</title>
    <?php
    include('../include/head.php');
    ?>
</head>
<body>
<?php
include('../include/header.php');
?>

<div class="container blockTop back3">
    <!----------------------- FRENCH CARTE---------------------------------->

    <section class="row">
        <div class="titre ">
            <h1>Bug Burger près de chez vous :</h1>
        </div>
        <div class=" col-md-offset-2 col-md-8 col-xs-12">
            <iframe width="100%" height="400px" frameBorder="1"
                    src="http://umap.openstreetmap.fr/fr/map/carte-sans-nom_167173?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
            <p><a href="http://umap.openstreetmap.fr/fr/map/carte-sans-nom_167173">Voir en plein écran</a></p>
        </div>
    </section>

    <!----------------------- END FRENCH CARTE---------------------------------->

    <!----------------------- LIST OF RESTAURANTS------------------->
    <section>
        <div class="row yellow">
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <h3 class="title-white">Bug Burger Bordeaux</h3>
                <div class="thumbnail white">
                    <img class="imgRestaurant" src="https://goo.gl/GmQi1k">
                    <div class="caption">
                        <p>
                            30 rue Mathieu, <br/>
                            33000 Bordeaux
                        </p>
                    </div>
                </div>
            </aside>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <h3 class="title-white">Bug Burger Lille</h3>
                <div class="thumbnail white">
                    <img class="imgRestaurant" src="https://goo.gl/1BDsDd">
                    <div class="caption">
                        <p>
                            4 Avenue des Saules<br/>
                            59160 Lomme
                        </p>
                    </div>
                </div>
            </aside>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <h3 class="title-white">Bug Burger Orléans</h3>
                <div class="thumbnail white">
                    <img class="imgRestaurant" src="https://goo.gl/GSZxAN">
                    <div class="caption">
                        <p>
                            1 Avenue du Champ de Mars<br/>
                            45000 Orléans
                        </p>
                    </div>
            </aside>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <h3 class="title-white">Bug Burger Lyon</h3>
                <div class="thumbnail white">
                    <img class="imgRestaurant" src="https://goo.gl/in4bGq">
                    <div class="caption">
                        <p>
                            17 rue Delandine<br/>
                            69002 Lyon
                        </p>
                    </div>
            </aside>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <h3 class="title-white">Bug Burger Paris</h3>
                <div class="thumbnail white">
                    <img class="imgRestaurant" src="https://goo.gl/1vwHrr">
                    <div class="caption">
                        <p>
                            11 rue de Poissy<br/>
                            75005 Paris
                        </p>
                    </div>
                </div>
            </aside>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <h3 class="title-white">Bug Burger Strasbourg</h3>
                <div class="thumbnail white">
                    <img class="imgRestaurant" src="https://goo.gl/Xh12Ek">
                    <div class="caption">
                        <p>
                            1 rue des Corps-de-Garde<br/>
                            67100 Strasbourg
                        </p>
                    </div>
                </div>
            </aside>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <h3 class="title-white">Bug Burger Toulouse</h3>
                <div class="thumbnail white">
                    <img class="imgRestaurant" src="https://goo.gl/MFKm5L">
                    <div class="caption">
                        <p>
                            1 Place de la bourse <br/>
                            31000 Toulouse
                        </p>
                    </div>
                </div>
            </aside>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <h3 class="title-white">La Loupe (siège social)</h3>
                <div class="thumbnail white">
                    <img class="imgRestaurant" src="https://goo.gl/quNUey">
                    <div class="caption">
                        <p>
                            Site d’élevage des insectes <br/>
                            18 Rue de la gare, <br/>
                            28240 La Loupe
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </section>
</div>
<!-----------------------END OF LIST OF RESTAURANTS------------------->
<footer>
    <?php
    include('../include/footer.php');
    ?>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-  hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
