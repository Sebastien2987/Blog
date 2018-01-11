<?php
require_once("model/Manager.php"); // Vous n'alliez pas oublier cette ligne ? ;o)
require_once("entities/post.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $posts = array();
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_order FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
        $result = $req->fetchAll();

        foreach ($result as $post){
            $postObject = new Post();
            $postObject->hydrate($post);
            array_push($posts, $postObject);
        }
        return $posts;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_order FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
}