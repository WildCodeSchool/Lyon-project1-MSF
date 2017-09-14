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
<div class="container blockTop">
<div class="row intro-form ">
    <h1>Contact</h1>
    <p>Vous avez d'autres questions ?<br />
    Vous souhaitez joindre le siège de notre compagnie Bug Burger situé à La Loupe ?</p>
    <p>Alors contactez nous au +33 6 19 34 42 37.</p>
    <p>Ou envoyez-nous un message avec le formulaire de contact ci-dessus :</p>
</div>

<!-----------------------CONTACT FORM------------------->
<div class="row">
    <div class=" col-sm-offset-2 col-sm-8">
        <form role="form" method="POST">
            <div class="row">
                <div>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" id="subjectTXT" name="subjectTXT">
            </div>
            <div class="form-group">
                <label for="messageTXT">Message</label>
                <textarea cols="36" rows="8" id="messageTXT" name="messageTXT"></textarea>
            </div>
            <!--BUTTON-->
            <button type="submit"  id="submitBTN" name="submitBTN"><span class="glyphicon glyphicon-send"></span>Envoyer</button>
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