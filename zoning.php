<div id="body">

<header>
    <div id="header">
        <div id="header1">
            <img src="assets/img/logo.png" alt="logo css">
            <!-- <img src="" alt="logo html"> -->
        </div>
        <div id="header2">
            <h1 id=titre>Mon premier site en HTML/CSS</h1>
        </div>
        <div id="header3">

            <i class="fa-brands fa-instagram fa-2xl"></i>
            <i class="fa-brands fa-square-facebook fa-2xl"></i>

        </div>
    </div>
</header>

<?php require "public/nav.html.php"; ?>

<hr>

<main>
    <div id="main">
        <div id="form">
            <form action="get">
                <fieldset>

                   <legend>Un peu banger non?</legend>
                   <br>
                   <label for="pseudo">Pseudo</label>
                   <br>
                   <input type="text" id="pseudo" name="pseudo" value="">
                   <br>
                   <label for="prenom">Prénom</label>
                   <br>
                   <input type="text" id="prenom" name="prenom" value="">
                   <br>
                   <label for="mot de passe">Mot de passe</label>
                   <br>
                   <input type="password" id="mot de passe" name="mot de passe" value="">
                   <br>
                   <label for="email">Email</label>
                   <br>
                   <input type="email" id="email" name="email" value="">
                   <br>
                   <label for="fichiers">Choisir un fichier</label>
                   
                   <input type="file" id="fichiers" name="fichiers">
                   <br>
                   <label for="checkbox">Orange</label>
                   <input type="checkbox" id="checkbox" name="checkbox"value="">
                   <br>
                   <label for="text">Message</label>
                   <br>
                   <textarea name="Message" id="text" rows="8"></textarea><br><br>
                   <input type="submit" value="Envoyer"><input type="reset">
            </fieldset>
            </form>
        </div>
    </div>
    <div id="copy">
        &copy; 2020 Le Poles
    </div>
</main>

<?php require "public/footer.html.php";?>

</div>
</body>
</html>