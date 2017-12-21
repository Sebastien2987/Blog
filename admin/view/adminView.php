<?php $title = 'Ajouter un billet'; ?>

<?php ob_start(); ?>
<h1>Bienvenue dans la partie d'administration du blog</h1>
<a href="index.php?action=adminaddPost">Ajourter un billet</a><br />
<a href="index.php?action=listPosts">Supprimer un billet</a><br />
<a href="index.php?action=editPost&id=<?php echo $data['id'];?>">Modifier un billet</a>