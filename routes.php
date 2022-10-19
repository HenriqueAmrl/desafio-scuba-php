<?php

use App\User\UserController;

$userController = new UserController();

switch ($_GET['page'] ?? null) {
    case 'register':
        $userController->do_register();
        break;
    case 'login':
    case null:
        $userController->do_login();
        break;
    default:
        $userController->do_not_found();
        break;
}
