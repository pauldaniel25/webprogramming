<?php
    require_once('../classes/account.class.php');

    $productObj = new Account();

    $role = $productObj->fetchRole();

    header('Content-Type: application/json');
    echo json_encode($role);