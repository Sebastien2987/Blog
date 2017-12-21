<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>
    <h1>Supprimer un billet</h1>

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