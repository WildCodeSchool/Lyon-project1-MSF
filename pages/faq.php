<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faq</title>
    <?php
    include('../include/head.php');
    ?>
</head>
<body>

<?php
include('../include/header.php');
?>

<!-----------------------FAQ ------------------->
<section class="container blockTop back1">
    <div class="row">
        <div class="titre">
            <h1>FAQ Bug Burger</h1>
        </div>
    </div>
    <div class="row yellow">
        <div class="faq col-xs-12 col-sm-6">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                "Pourquoi manger des insectes ? Personne n'en consomme !"
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            Le Saviez-Vous ? Plus de 2,5 milliards de personnes à travers le monde sont déjà
                            “entomophages” (consommateurs d’insectes). Cette pratique est reconnue et célèbre depuis des
                            siècles en Asie, en Afrique et en Amérique centrale !
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                "Est-ce réellement sain de manger des insectes ?"
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Oui ! Oui et OUI ! C’est un complément alimentaire de qualité ! Ils sont riches en fibres et
                            en oligo-éléments (cuivre, fer, magnésium…). De plus nos fast-foods vous proposent toute une
                            variété d’insectes différents pour varier les plaisirs de vos papilles gustatives !
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                "Les insectes remplacent-ils la viande ?"
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            Exactement ! Leur valeur nutritive est égale et voire même supérieure à celle de la viande
                            que l’on consomme habituellement car les insectes sont très riches en protéines !
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                "D'où proviennent les insectes-burgers ?"
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingFour">
                        <div class="panel-body">
                            Nos insectes sont préalablement sélectionnés en France et certifiés label-bio ! En effet ils
                            proviennent tous d’une ferme d’un producteur basée en Bretagne.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                "Et pour vos autres produits ?"
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingFive">
                        <div class="panel-body">
                            Tous les autres produits (pain, tomate, salade… et sauces) sont exclusivement produits eux
                            aussi en France et certifiés label-bio !
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="faq col-xs-12 col-sm-6">

                    <div class="message-de-bug-burger"
                    <p>“Si toutefois vous n’avez pas trouvé la réponse à vos questions, nous vous invitons à visiter la
                        page "Contact" dans la barre de menu. Nous serons ravis de répondre à toutes vos questions sur
                        nos délicieux “Bug’s Burgers” !</p>
                    <p>L’équipe de Bug Burgers</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----------------------END OF FAQ ------------------->
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
