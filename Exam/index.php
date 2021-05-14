<?php
ob_start();
require "models/Database.php";
require "models/ProductModel.php";
require "controllers/ProductController.php";

?>

<?php
include_once 'views/layout/head.php';
?>
<?php
    $controller = new ProductController();
    $page = $_REQUEST['page'] ?? null;
    switch ($page) {
        case 'add':
            $controller->add();
            break;
        case 'delete':
            $controller->delete();
            break;
        case 'edit':
            $controller->edit();
            break;
        case 'search':
            $controller->search();
            break;
        default:
            $controller->display();
            break;

    }
   ?>
<?php
include_once 'views/layout/end.php';
?>

<?php
//ob_end_flush();
//?>

