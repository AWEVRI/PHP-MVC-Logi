<?php

class ControllerUsers{

    /*=============================================
    USER LOGIN
    =============================================*/

    static public function ctrUserLogin(){

        if (isset($_POST["login"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["username"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])) {
                $user=$_POST["username"];

                $answer = UsersModel::MdlShowUsers($user);

                // var_dump($answer);

                if($answer["username"] == $_POST["username"] && $answer["password"] == $_POST["password"]){

                    $_SESSION["loggedIn"] = "ok";
                    $_SESSION["usertype"]=$answer["usertype"];
                    $_SESSION["username"]=$answer["username"];

                    echo '<script>

						window.location = "Views/Modules/home.php";

						</script>';



                }else{

                    echo '<br><div class="alert alert-danger">User or password incorrect</div>';

                }
            }
        }
    }
}