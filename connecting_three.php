<?php
    $title = "Главная страница";
    require "blocks/header.php";
?>
    <h1>Главная страница</h1>
<?php
    //phpinfo()
    //    echo '<pre>';
    //    print_r($_SERVER);
    //    echo '</pre>';

    //echo $_SERVER['HTTPS'];
    //echo $_SERVER['HTTP_HOST']. ' - ' .$_SERVER['REQUEST_URI'];
    //echo  $_SERVER['HTTP_USER_AGENT'];

    if(isset($_GET['source']) != "") {
        $link = explode("?source=", $_SERVER['REQUEST_URI']);
        $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];

        header('HTTP/1.1 301 Moved Permanently');
        header("Location: ". $redirect);
        exit();
    }

    require "blocks/footer.php";
?>