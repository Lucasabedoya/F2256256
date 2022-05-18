<?php

    class Conexion{
        private $host;
        private $drive;
        private $base;
        private $user;
        private $pass;
        private $url;
        private $charset;

        public function __construct()
        {
            $this -> host = "localhost";
            $this -> drive = "mysql";
            $this -> base = "db_ejem";
            $this -> user = "root";
            $this -> pass = "";
            $this -> url = $this -> drive . ":host=". 
                            $this -> host. ";dbname=" . 
                            $this -> base;
            $this -> charset = "UTF8";
        }

        public function getConec()
        {
            try {
                $con = new PDO($this -> url, $this -> user, $this -> pass);
                #var_dump($con);

            } catch (Exception $e) {
                echo "Error de conexion a la base de datos <br>" . $e ->getMessage();
            }
            return $con;
        }
    }

    #$objCon = new Conexion();
    #$objCon -> getConec();

?>