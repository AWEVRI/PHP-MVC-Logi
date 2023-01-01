<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="Dist/css/bootstrap.css">


    <title>Document</title>
</head>
<body>
    <!-- Site wrapper -->

        <?php

                if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "ok"){

                echo '<div class="container-fluid">';

                /*=============================================
                =            header          =
                =============================================*/  

                include "modules/header.php";

                /*=============================================
                =            sidebar          =
                =============================================*/ 

                if($_SESSION["usertype"]=="admin"){
                    include "modules/sidebar.php";
                }elseif ($_SESSION["profile"]=="staff") {
                    include "modules/staffsidebar.php";
                }elseif ($_SESSION["profile"]=="student") {
                    include "modules/studentsidebar.php";
                }else {
                    include "modules/sidebar.php";
                }
                

                /*=============================================
                =            Content          =
                =============================================*/ 

                if(isset($_GET["route"])){

                    if ($_GET["route"] == 'home' ||
                        $_GET["route"] == 'stuhome' ||
                        $_GET["route"] == 'users' ||
                        $_GET["route"] == 'categories' ||
                        $_GET["route"] == 'products' ||
                        $_GET["route"] == 'customers' ||
                        $_GET["route"] == 'manage-sales' ||
                        $_GET["route"] == 'create-sales' ||
                        $_GET["route"] == 'sales-report' ||
                        $_GET["route"] == 'logout'){

                    include "modules/".$_GET["route"].".php";
                    }

                    else{
                    
                    include "modules/404.php";
                    
                    }

                }

                else{
                    
                    include "modules/home.php";
                
                }

                /*=============================================
                =            Footer          =
                =============================================*/ 

                include "modules/footer.php";

                echo '</div>';

                }else{
                /*=============================================
                =            login          =
                =============================================*/ 

                include "modules/login.php";
                }


        ?>  
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>