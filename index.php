 <?php
    session_start();
     define('PATH_SYSTEM', __DIR__.'/system');
     
    require_once "./mvc/Bridge.php";
    require_once PATH_SYSTEM."/core.php";

    $myApp = new App();
?> 