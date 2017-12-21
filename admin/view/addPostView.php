<?php $title = 'Ajouter un billet'; ?>

<?php ob_start(); ?>
<h1>Ajouter un billet</h1>
<form action="index.php?action=addPost" method="post">
            <p>
            Votre titre : <input type="text" name="title" /><br />
            Votre contenu :<br />
            <textarea rows="10" cols="50" name="content" />Écrire ici votre billet</textarea><br />
            <input type="submit" value="Envoyer" />
            </p>
</form>