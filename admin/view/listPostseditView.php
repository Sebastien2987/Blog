<?php $title = 'Modifier un billet'; ?>


<?php ob_start(); ?>
<center><img src="../public/images/titre-alaska.png"></center>
    <h1>Modifier un billet</h1>
    <p><center><a href="index.php">Retour à l'accueil de la partie administration</a></center></p>

        <?php

        while ($data = $posts->fetch())

        {

        ?>

            <div class="news">

                <h3>
                    <?= htmlspecialchars($data['title']) ?> <a href="index.php?action=selecteditPost&id=<?php echo $data['id'];?>&title=<?php echo $data['title'];?>&content=<?php echo $data['content'];?>">Modifier</a>
                </h3>
            </div>

        <?php

        }

        $posts->closeCursor();
        ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>