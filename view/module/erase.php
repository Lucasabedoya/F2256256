<?php

    //echo "Llego";
    eraseUser();
        function eraseUser(){
        try {
            $objDtoUser = new User();
            $objDtoUser -> setCode($_GET['codigo']);
            $objDaoUser = new UserModel($objDtoUser);
            if ($objDaoUser -> mIdEraseUser() == true) {
                echo "
                    <script>
                        Swal.fire(
                            'Borrado!',
                            'El registro ha sido borrado',
                            'success'
                        )
                    </script>
                ";
                include_once("view/module/user.php");
            }
        } catch (PDOException $e) {
            echo "Error en el borrado del registro " . $e -> getMessage();
        }
    }

    
?>