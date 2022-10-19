<?php

namespace App\User;

class UserCrud {
    public function create( User $user ) {
        $content = file_get_contents( DATA_LOCATION );
        $content = json_decode( $content, true );
        $content[] = [
            'name'             => $user->getName(),
            'email'            => $user->getEmail(),
            'password'         => $user->getPassword(),
            'password-confirm' => $user->getPasswordConfirm(),
        ];
        file_put_contents( DATA_LOCATION, json_encode( $content ) );
    }
}