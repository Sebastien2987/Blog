<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>
<center><img src="public/images/titre-alaska.png"></center>
    <h1>Blog d'essai pour apprendre le PHP</h1>

        <?php

        while ($data = $posts->fetch())

        {

        ?>

            <div class="news">

                <h3>

                    <?= htmlspecialchars($data['title']) ?>

                    <em>le <?= $data['creation_date_order'] ?></em>

                </h3>

                

                <p>

                    <?= nl2br(htmlspecialchars($data['content'])) ?>

                    <br />

                    <em><a href="index.php?action=post&id=<?php echo $data['id'];?>">Commentaires</a></em>

                </p>

            </div>

        <?php

        }

        $posts->closeCursor();
        ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>