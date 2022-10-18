<?php

function do_register() {
    $method = $_SERVER['REQUEST_METHOD'];
    
    switch ($method) {
        case 'GET':
            render_view('register');
            break;
        case 'POST':
            $user = $_POST['person'];
            crud_create($user);
            header('location: /?page=login');
            break;
    }
}

function do_login() {
    render_view('login');
}

function do_not_found() {
    http_response_code(404);
    render_view('not_found');
}