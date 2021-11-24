<?php

function adminOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {

        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}
