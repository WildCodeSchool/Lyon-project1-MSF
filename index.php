<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<!----------------------- HEADER AND NAV---------------------------------->

<?php
include('header.php');
?>

<!----------------------- END OF HEADER AND NAV---------------------------------->


<!----------------------- CONCEPT PRESENTATION---------------------------------->
<div class="container blockTop back">
    <div class="row white">
        <!--<div class="col-md-6 col-xs-12">
            <img id="logo-flag" src="http://img1.imagilive.com/0917/logobiofr.PNG" alt="bio et francais">
        </div>-->

        <div class=" col-md-offset-2 col-md-8 col-xs-12">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="http://img1.imagilive.com/0917/Logobiofrench.jpg"></div>
                    <div class="item"><img alt="photo" src="https://goo.gl/QaUt7p"></div>
                    <div class="item"><img alt="photo" src="https://goo.gl/oGQKQR"></div>
                    <div class="item"><img alt="photo" src="https://goo.gl/65UdLh"></div>
                    <div class="item"><img alt="photo" src="https://goo.gl/SQ9FME"></div>
                </div>
                <a class="left carousel-control" href="#carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
        </div>
    </div>

    <div class="row white">
        <div class="col-lg-offset-2 col-lg-8 col-xs-8">
            <article>

                <h1>
                    Bug Burger, j’en fourmille d’envie !
                </h1>

        </div>
    </div>
    <div class=" row yellow">
        <h2>Concept </h2>
        <p>
            Ce type d’alimentation est déjà ancré dans la plupart des cultures aussi bien en Asie ou
            dans certaines contrées africaines. Les insectes sont l’avenir de la consommation des
            populations. Les variations de goûts sont notées selon la forme de chaque insecte, de sa
            couleur, de sa texture et la façon dont il est cuisiné. Ce qui ouvre un monde de
            possibilités à tester au plus vite chez Bug Burger !
        </p>
    </div>

    <div class="row white">

        <h2>Sain</h2>
        <p>
            Nos insectes ne mangent que les meilleurs légumes et céréales, vivent agréablement et à leur
            rythme. Nous leur donnons tout simplement ce dont ils ont besoin, et nous le choisissons
            bien.

        </p>
    </div>
    <div class="row yellow">

        <h2>Local</h2>
        <p>
            Élevés en France, nos grillons, nos vers de farine, nos sauterelles sont des produits du
            terroir.. Les gens du coin sont unanimes : ils vont très bien avec la viande et la salade..


        </p>
    </div>

    <div class="row white">
        <h2> <span class="glyphicon glyphicon-leaf"></span> 100% naturel</h2>
        <p>Vous pouvez les ins(p)ecter autant que vous voulez, nos insectes sont élevés par des
            passionnés et aucun produit artificiel n'est utilisé pour les faire grandir.
        </p>
    </div>
    </article>
</div>
</div>
<!-----------------------END OF CONCEPT PRESENTATION---------------------------------->


<!-----------------------FOOTER AND SCRIPTS---------------------------------->
<?php
include('footer.php');
?>

</body>

</html>
