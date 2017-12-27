<?php
require_once("model/Manager.php");


class AdminPostManager extends Manager
{

	public function addPost($title, $content)
    {
    $db = $this->dbConnect();
	$req = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(:title, :content, NOW())');
	$req->execute(array(
	'title' => $_POST ['title'],
	'content' => $_POST ['content']
	));

	return $insertreq;

    }

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_order FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    public function suppPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->exec('DELETE FROM posts WHERE id =\'' . $_GET['id'] . '\'');
        return $req;
    }

    public function selecteditPost($postId)
    {
        $db = $this->dbConnect();
        $selecteditreq = $db->query('SELECT id, title, content FROM posts WHERE id=\'' . $_GET['id'] . '\'');
        return $selecteditreq;
    }

    public function editPost($postId, $title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
        $req->execute(array(
            'id' => $_GET['id'],
            'title' => $_POST['title'],
            'content' => $_POST ['content'],
    ));

        return $req;
    }
}