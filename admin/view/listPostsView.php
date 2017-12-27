<?php $title = 'Supprimer un billet'; ?>


<?php ob_start(); ?>
<center><img src="../public/images/titre-alaska.png"></center>
    <h1>Supprimer un billet</h1>
    <p><center><a href="index.php">Retour à l'accueil de la partie administration</a></center></p>

        <?php

        while ($data = $posts->fetch())

        {

        ?>

            <div class="news">

                <h3>
                    <?= htmlspecialchars($data['title']) ?> <a href="index.php?action=suppPost&id=<?php echo $data['id'];?>">Supprimer</a>
                </h3>
            </div>

        <?php

        }

        $posts->closeCursor();
        ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>