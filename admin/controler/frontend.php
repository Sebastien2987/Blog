<?php

// Chargement des classes
require_once('model/AdminPostManager.php');
require_once('model/AdminCommentManager.php');


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

function selecteditPost($postId)
{
    $adminpostManager = new AdminPostManager();
    $selectedit = $adminpostManager->selecteditPost($postId);

    require('view/editPostView.php');
}



function editPost($postId, $title, $content)
{
    $adminpostManager = new AdminPostManager();

    $editpost = $adminpostManager->editPost($postId, $title, $content);

    if ($editpost === false) {
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else {
        header('Location: index.php');
    }
}

function listModerations()
{
    $admincommentsManager = new AdminCommentManager();
    $listcommentsmoderation = $admincommentsManager->getCommentsModeration();

    require('view/listcommentsmoderationView.php');
}

function suppComment()
{
    $admincommentManager = new AdminCommentManager();

    $suppcomment = $admincommentManager->suppComment($_GET['id']);

    if ($suppcomment === false) {
        throw new Exception('Impossible de supprimer le commentaire !');
    }
    else {
        header('Location: index.php?action=listModerations');
    }
}