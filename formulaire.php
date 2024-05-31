<?php require "public/header.html.php"; ?>

<hr>

<main>
    <div id="main">
        <div id="form">
            <h2>Formulaire</h2>
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
</main>

<?php require "public/footer.html.php";?>