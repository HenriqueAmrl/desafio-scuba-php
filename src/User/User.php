<?php
    
    namespace App\User;
    
    class User {
        private $name;
        private $email;
        private $password;
        private $password_confirm;
        
        public function getName() {
            return $this->name;
        }
        
        public function setName( $name ) {
            $this->name = $name;
        }
        
        public function getEmail() {
            return $this->email;
        }
        
        public function setEmail( $email ) {
            $this->email = $email;
        }
        
        public function getPassword() {
            return $this->password;
        }
        
        public function setPassword( $password ) {
            $this->password = $password;
        }
        
        public function getPasswordConfirm() {
            return $this->password_confirm;
        }
        
        public function setPasswordConfirm( $password_confirm ) {
            $this->password_confirm = $password_confirm;
        }
    }