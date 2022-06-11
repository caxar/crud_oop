<?php 

    include './classes/user.class.php';

    $delUser = new User();
    $delUser->deleteUser($_GET['id']);
