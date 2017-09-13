<?php
include('header.php');
?>


<body>

<div class="Contact-titre"
    <h1>Contact</h1>
    <p>Vous avez d'autres questions ?
    Vous souhaitez joindre le siège de notre compagnie Bug Burger situé à La Loupe ?</p>
    <p>Alors contactez nous au +33 6 19 34 42 37.</p>
    <p>Ou envoyez-nous un message avec le formulaire de contact ci-dessus :</p>
</div>

<form action="/page-de-traitement" method="post">

    <div class="nom-prenom">
        <label for="nom">
            Nom et Prénom :
        </label>
        <input type="text" id="nom"/>
    </div>

    <div class="email">
        <label for="courriel">Votre email :
        </label>
        <input type="email" id="courriel"/>
    </div>

    <div class="message">
        <label for="message">Votre message :
        </label>
        <textarea id="message"></textarea>
    </div>

    <div class="button">
        <button type="submit">Contacter Bug Burger</button>
    </div>

</form>

<?php
include('footer.php');
?>

</body>
</html>