<?php $title = 'Commentaires à modérés'; ?>


<?php ob_start(); ?>
<center><img src="../public/images/titre-alaska.png"></center>
    <h1>Commentaires signalés</h1>
    <p><center><a href="index.php">Retour à l'accueil de la partie administration</a></center></p>

        <?php

        while ($data = $listcommentsmoderation->fetch())

        {

        ?>

            <div class="news">

                <h3>

                    <?= htmlspecialchars($data['author']) ?>

                </h3>
                <p>

                    <?= nl2br(htmlspecialchars($data['comment'])) ?>

                    <br />

                    <em><a href="index.php?action=suppComment&id=<?php echo $data['id'];?>">Supprimer le commentaire</a></em>

                </p>

            </div>

        <?php

        }

        $listcommentsmoderation->closeCursor();
        ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>