<?php $title = 'Administration du blog'; ?>

<?php ob_start(); ?>
<center><img src="../public/images/titre-alaska.png"></center>
<h1>Bienvenue dans la partie d'administration du blog</h1>
<div class="link_admin">
<a href="index.php?action=adminaddPost">Ajourter un billet</a>
<a href="index.php?action=listPosts">Supprimer un billet</a>
<a href="index.php?action=listPostsedit">Modifier un billet</a>
<a href="index.php?action=listModerations">Modération des commentaires</a>
</div>
<p><center><a href="../index.php">Retour au blog</a></center></p>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>