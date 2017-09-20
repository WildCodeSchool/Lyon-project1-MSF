<!DOCTYPE html>
<html lang="en">

<!----------------------- HEAD---------------------------------->
<?php
include('head.php');
?>

<!-----------------------END OF  HEAD---------------------------------->


<body>

<!-----------------------HEADER AND NAV------------------->
<?php
include('header.php');
?>
<!-----------------------END OF HEADER AND NAV------------------->


<!-----------------------CONTACT INFOS------------------->
<div class="container blockTop back2">

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
                <p>Ou envoyez-nous un message avec le formulaire de contact ci-dessus :</p>
            </div>

            <form role="form" method="POST">
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
                    <textarea cols="36" rows="8" class="form-control" id="messageTXT" name="messageTXT" placeholder="Votre message"></textarea>
                </div>
                <!--BUTTON-->
                <button type="submit" id="submitBTN" name="submitBTN"><span class="glyphicon glyphicon-send"></span> Envoyer</button>
            </form>
        </div>
    </div>
</div>
<!-----------------------END CONTACT FORM------------------->


<!-----------------------FOOTER AND SCRIPT------------------->

<?php
include('footer.php');
?>
<!----------------------- END OF FOOTER AND SCRIPT------------------->
</body>
</html>