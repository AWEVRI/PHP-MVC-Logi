<?php

require_once "connection.php";

class UsersModel{

    /*=============================================
    SHOW USER
    =============================================*/

    static public function MdlShowUsers(){
        $sql="SELECT * FROM users";

        $stmt = Connection::connect()->prepare($sql);

//        $stmt -> bindParam( PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();

    }

}


