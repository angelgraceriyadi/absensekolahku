<?php

    session_start();
    if (empty($_SESSION['username']))
    {
        header('Location: ../index.php');
    }

    session_destroy();
    header('Location: ../index.php');
