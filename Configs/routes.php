<?php
if (isset($_GET['option']))
    $option = $_GET['option'];
else
    $option = 'null';

if (isset($_SESSION['nmaso'])) {
    $maquyen = $_SESSION['nmaquyen'];
    if ($option == "doimatkhau") {
        include("Controls/DoimatkhauController.php");
    } else if ($option == "null") {
        include("Views/TTCanBo.php");
    }
    else
        include("Views/NotFound.php");
}
//het phan xet neu ton tai ma so
else {
    include("Controls/DangnhapController.php");
}
?>