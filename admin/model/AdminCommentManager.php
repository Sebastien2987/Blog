<?php
require_once("model/Manager.php");


class AdminCommentManager extends Manager
{
    public function getCommentsModeration()
    {
        $db = $this->dbConnect();
        $commentsmoderation = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_order, report FROM comments WHERE report = "1" ORDER BY comment_date DESC');

        return $commentsmoderation;
    }

        public function suppcomment()
    {
        $db = $this->dbConnect();
        $req = $db->exec('DELETE FROM comments WHERE id =\'' . $_GET['id'] . '\'');
        return $req;
    }
}