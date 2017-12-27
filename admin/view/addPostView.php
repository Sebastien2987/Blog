<?php $title = 'Ajouter un billet'; ?>

<?php ob_start(); ?>
<center><img src="../public/images/titre-alaska.png"></center>
<h1>Ajouter un billet</h1>
<p><center><a href="index.php">Retour à l'accueil de la partie administration</a></center></p>
<div class="post_comment">
<form action="index.php?action=addPost" method="post">
            <p>
            Votre titre : <input type="text" name="title" style="width: 100%;" /><br /><br />
            Votre contenu :<br />
            <textarea rows="10" cols="50" name="content" style="width: 100%;" />Écrire ici votre billet</textarea><br />
            <input type="submit" value="Envoyer" />
            </p>
</form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>