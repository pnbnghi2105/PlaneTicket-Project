<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/header.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="header">
                <?php include('View/logo.php'); ?>
            </div>
            <div class="container_nav">
                <?php include('View/menu.php'); ?>
            </div>

            <div class="button-login">
                <?php
                 if (isset($_SESSION['username'])){
                    echo $_SESSION['hoten'];?>
                    <a href="View/logout.php">Đăng xuất</a>
                  <?php } 
                else
                include('View/button-login1.php');
                  ?>
                
            </div>
        </div>

        <div class="content">
            <?php
            if (isset($_GET['pid'])) {
                $pid = intval($_GET['pid']);
                switch ($pid) {
                    case 1:
                        // include('View/content-left.php');
                        include('View/datve.php');
                        break;
                    case 2:
                        // include('View/content-left.php');
                        include('View/gioithieu.php');
                        break;
                    case 3:
                        // include('View/content-left.php');
                        include('View/tintuc.php');
                        break;
                    case 4:
                        // include('View/content-left.php');
                        include('View/uudai.php');
                        break;
                    case 5:
                        // include('View/content-left.php');
                        include('View/dschuyenbay.php');
                        break;
                    case 7:
                        include('View/noidia.php');
                        break;
                    case 8:
                        include('View/quocte.php');
                        break;
                    case 9:
                        include('View/chitietchuyenbay.php');
                        break;
                    case 10:
                        include('View/kqtimkiem.php');
                        break;
                     case 11:
                        include('View/login.php');
                        break;
                    default:
                        include('View/content-left.php');
                        include('View/content-right.php');
                        break;
                }
            } else {
                include('View/content-left.php');
                include('View/content-right.php');
            }
            ?>
        </div>
    </div>
</body>

</html>
