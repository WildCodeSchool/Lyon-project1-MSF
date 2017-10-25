<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactez-nous</title>
    <?php
    include('../include/head.php');
    ?>
</head>
<body>
<?php
include('../include/header.php');
?>
<!-----------------------CONTACT INFOS------------------->
<section class="container blockTop back2">
    <div class="titre">
        <h1>Contactez-nous :</h1>
    </div>
    <!-----------------------CONTACT FORM------------------->
    <div class="row ">
        <div class=" col-sm-offset-2 col-sm-8 yellow">
            <div class="row message-de-bug-burger">
                <p>Vous avez d'autres questions ?<br/>
                    Vous souhaitez joindre le siège de notre compagnie Bug Burger situé à La Loupe ?</p>
                <p>Alors contactez nous au +33 6 19 34 42 37.</p>
                <p>Ou envoyez-nous un message avec le formulaire de contact ci-dessous :</p>
            </div>
            <form action="../index.php" role="form" method="POST">
                <div class="row">
                    <div>
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="messageTXT"></label>
                    <textarea cols="36" rows="8" class="form-control" id="messageTXT" name="messageTXT"
                              placeholder="Votre message"></textarea>
                </div>
                <!--BUTTON-->
                <button type="submit" id="submitBTN" name="submitBTN" disabled="disabled"><span class="glyphicon glyphicon-send"></span>
                    Envoyer
                </button>
            </form>
        </div>
    </div>
</section>
<!-----------------------END CONTACT FORM------------------->
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
