<!DOCTYPE html>
<?php
include('backend/ajouter.php');
?>
<html>

    <head>
        <title>exercices</title>
        <link rel="stylesheet" href="frontend/style.css">
    </head>

    <body>
        <form action="" method="POST">
            <fieldset class="form">
                <h1>Ajouter un exercice</h1>
                <div class="in">
                    <label for="titre">Titre de l'exercice</label>
                    <input type="text" id="titre" name="titre" required>
                </div>
                <div class="in">
                    <label for="auteur">Auteur de  l'exercice</label>
                    <input type="text" id="auteur" name="auteur" required>
                </div>
                <div class="in">
                    <label for="date">date de creation</label>
                    <input type="date" id="date_creation" name="date_creation" required>
                </div>

                <button type="submit">Envoyer</button>
            </fieldset>
        </form>

        <?php 
            include ('frontend/table.php');
        ?>
        
    </body>
</html>