<?php

namespace App\User;

use App\View;

class UserController {
    private $crud;
    private $view;
    
    public function __construct() {
        $this->crud = new UserCrud();
        $this->view = new View();
    }
    
    public function do_register() {
        $method = $_SERVER['REQUEST_METHOD'];
        
        switch ( $method ) {
            case 'GET':
                $this->view->render_view( 'register' );
                break;
            case 'POST':
                $user = new User();
                $user->setName( $_POST['person']['name'] ?? null );
                $user->setEmail( $_POST['person']['email'] ?? null );
                $user->setPassword( $_POST['person']['password'] ?? null );
                $user->setPasswordConfirm( $_POST['person']['password-confirm'] ?? null );
                
                $this->crud->create( $user );
                header( 'location: /?page=login' );
                break;
        }
    }
    
    public function do_login() {
        $this->view->render_view( 'login' );
    }
    
    public function do_not_found() {
        http_response_code( 404 );
        $this->view->render_view( 'not_found' );
    }
}