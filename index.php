<?php
/**
 * @author lioxca
 * @copyright 2012
 */
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . '/PhpProject1/Models/Nguoidung.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quản Lý Công Tác Văn Nghệ Trường Đại Học Cần Thơ</title>
    </head>
    <body>
        <!-- Start header -->
        <div id="header">
            <?php
            include_once("Module/header.php");
            ?>
        </div>
        <!-- End header -->
        <!-- Start main -->
        <div id="container" >
            <div>
                <?php
                include_once($_SERVER['DOCUMENT_ROOT'] . '/PhpProject1/Configs/routes.php');
                ?>
            </div>
        </div>
        <!-- End Main--> 
        <div id="footer">
            <?php
            include_once("Module/footer.php");
            ?>
        </div>
    </body>
</html>
