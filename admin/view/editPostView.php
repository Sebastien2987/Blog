<?php $title = 'Modifier un billet'; ?>

<?php ob_start(); ?>
<center><img src="../public/images/titre-alaska.png"></center>
<h1>Modifier un billet</h1>
<p><center><a href="index.php">Retour à l'accueil de la partie administration</a></center></p>
<div class="post_comment">
        <form action="index.php?action=editPost&id=<?php echo $_GET['id'];?>" method="post">
            <p>
            Titre : <input type="text" name="title" style="width: 100%;" value="<?php echo $_GET['title'];?>" /><br />
            Contenu :<br />
            <textarea rows="10" cols="50" name="content" style="width: 100%;" /><?php echo $_GET['content']; ?></textarea><br />
            <input type="submit" value="Modifier" />
            </p>
        </form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>