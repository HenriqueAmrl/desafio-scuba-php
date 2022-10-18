<?php

switch ($_GET['page'] ?? null) {
    case 'register':
        do_register();
        break;
    case 'login':
    case null:
        do_login();
        break;
    default:
        do_not_found();
        break;
}
