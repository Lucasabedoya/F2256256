<?php
    class User{
        private $code;
        private $name;
        private $lastName;
        private $userP;
        private $password;

        /*Getter*/
        public function getCode()
        {
            return $this -> code;
        }
        public function getName()
        {
            return $this -> name;
        }
        public function getLastName()
        {
            return $this -> lastName;
        }
        public function getUserP()
        {
            return $this -> userP;
        }
        public function getPassword()
        {
            return $this -> password;
        }

        /*Setter */
        public function setCode($code)
        {
            $this -> code = $code;
        }
        public function setName($name)
        {
            $this -> name = $name;
        }
        public function setLastName($lastName)
        {
            $this -> lastName = $lastName;
        }
        public function setUserP($userP)
        {
            $this -> userP = $userP;
        }
        public function setPassword($password)
        {
            $this -> password = $password;
        }
    }

?>