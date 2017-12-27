<?php
require('controler/frontend.php');

try { 
	if (isset($_GET['action'])) {
        if ($_GET['action'] == 'adminaddPost') {
            adminaddPost();
        }

        elseif ($_GET['action'] == 'addPost') {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                addPost($_POST['title'], $_POST['content']);
            }
             else {
            // Autre exception
             throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'listModerations') {
            listModerations();
        }
        elseif ($_GET['action'] == 'suppComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                suppComment();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun commentaire sélectionné');
            }
        }
        elseif ($_GET['action'] == 'suppPost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                suppPost();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun billet sélectionné');
            }
        }
        elseif ($_GET['action'] == 'listPostsedit') {
            listPostsedit();
        }

        elseif ($_GET['action'] == 'selecteditPost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                    selecteditPost($_GET['id']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
        elseif ($_GET['action'] == 'editPost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    editPost($_POST['title'], $_POST['content']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else {
        admin();
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}