<?php

function adminOnly($redirect = './index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {

        header('location: ' . $redirect);
        exit(0);
    }
}
