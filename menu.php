<?php
    session_start();
        if (isset($_SESSION["ses_logado"])){
            if ($_SESSION["ses_logado"]=="S"){require_once("html/menu.html");
            } else {
                print("Você não está logado");
                header("refresh:1;url=index.php",true,401);}
            } else {
                print("Você não está logado...");
                header("refresh:1;url=index.php",true,401);
            }
?>