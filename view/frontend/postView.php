<?php $title = 'Commentaires du billet'; ?>


<?php ob_start(); ?>
<center><img src="public/images/titre-alaska.png"></center>
        <h1>Commentaires sur le billet</h1>
        <p><center><a href="index.php?action=listPosts">Retour à la liste des billets</a></center></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= $post['creation_date_order'] ?></em>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
        </div>
        <div class="comments">
        <h2>Commentaires</h2>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_order'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <em><a href="index.php?action=editReport&id=<?php echo $comment['id'];?>">Signaler le commentaire</a></em>
        <?php
        }
        ?>
        </div>
        <div class="post_comment">

        <h2>Laisser un commentaire</h2>
<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>