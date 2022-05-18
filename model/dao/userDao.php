<?php
    //include_once "../model/conexion.php";
    //include_once "../model/dto/userDto.php";

    class UserModel{
        private $code;
        private $name;
        private $lastName;
        private $userP;
        private $password;

        public function __construct($objDtoUser)
        {
            $this -> code = $objDtoUser -> getCode();
            $this -> name = $objDtoUser -> getName();
            $this -> lastName = $objDtoUser -> getLastName();
            $this -> userP = $objDtoUser -> getUserP();
            $this -> password = $objDtoUser -> getPassword();
        }

        public function getQueryLogin()
        {
            $sql = "SELECT * FROM user WHERE userP = ? AND password = ?";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> userP, PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> password, PDO::PARAM_STR);
                $stmt -> execute();
                $result = $stmt;

            } catch (Exception $e) {
                echo "Error al consultar usuarios " . $e -> getMessage();
            }
            return $result;
        }

        public function mIdInsertUser()
        {
            $sql = "CALL spInsertUser(?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> name, PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> lastName, PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> userP, PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> password, PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al insertar usuarios " . $e -> getMessage();
            }
            return $estado;
        }

        public function mIdSearchAllUsers()
        {
            $sql = "call spSearchAllUser()";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " .$e -> getMessage();
            }

            return $respon;
        }

        public function mIdEraseUser()
        {
            $respon = false;

            $sql = "call spDeleteUser(?)";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this->code, PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al eliminar los registros en el dao " .$e -> getMessage();
            }
            return $respon;
        }


        public function mIdUpdateUser()
        {
            $sql = "CALL spUpdateUser(?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> code, PDO::PARAM_INT);
                $stmt -> bindParam(2, $this -> name, PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> lastName, PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> password, PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> userP, PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al insertar usuarios " . $e -> getMessage();
            }
            return $estado;
        }

    }

?>