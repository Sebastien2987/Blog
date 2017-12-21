<?php

// Chargement des classes
require_once('model/AdminPostManager.php');

function admin()
{
     require('view/adminView.php');
}

function adminaddPost()
{
     require('view/addPostView.php');
}

function addPost($title, $content)
{
    $adminpostManager = new AdminPostManager(); // Création d'un objet
    $addpost = $adminpostManager->addPost($title, $content); // Appel d'une fonction de cet objet
if ($addpost === false) {
        throw new Exception('Impossible d\'ajouter le billet !');
    }
    else {
        header('Location: index.php');
    }
}

function listPosts()
{
    $adminpostManager = new AdminPostManager(); // Création d'un objet
    $posts = $adminpostManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/listPostsView.php');
}



function suppPost($postId)
{
    $adminpostManager = new AdminPostManager();

    $supppost = $adminpostManager->suppPost($_GET['id']);

    if ($supppost === false) {
        throw new Exception('Impossible de supprimer le billet !');
    }
    else {
        header('Location: index.php?action=listPosts');
    }
}

function listPostsedit()
{
    $adminpostManager = new AdminPostManager(); // Création d'un objet
    $posts = $adminpostManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/listPostseditView.php');
}

function editPost($postId, $title, $content)
{
    $adminpostManager = new AdminPostManager();

    $editpost = $adminpostManager->editPost($postId, $title, $contet);

    if ($editpost === false) {
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else {
        header('Location: index.php?action=editpost');
    }
}