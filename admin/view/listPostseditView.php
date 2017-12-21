<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>
    <h1>Modifier un billet</h1>

        <?php

        while ($data = $posts->fetch())

        {

        ?>

            <div class="news">

                <h3>
                    <?= htmlspecialchars($data['title']) ?> <a href="index.php?action=editPost&id=<?php echo $data['id'];?>">Modifier</a>
                </h3>
            </div>

        <?php

        }

        $posts->closeCursor();
        ?>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>