<?php
require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/DashboardController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/ProductAdminController.php';
require_once 'app/controllers/SalesController.php';

session_start();

$page = $_GET['page'] ?? 'login';

switch ($page) {
    case 'login':
        $auth = new AuthController();
        $auth->login();
        break;

    case 'logout':
        $auth = new AuthController();
        $auth->logout();
        break;

    case 'dashboard':
        $dashboard = new DashboardController();
        $dashboard->index();
        break;

    case 'user':
        $userCtrl = new UserController();
        $userCtrl->index();
        break;

    case 'user_create':
        $userCtrl = new UserController();
        $userCtrl->create();
        break;

    case 'user_delete':
        $userCtrl = new UserController();
        $userCtrl->delete();
        break;


    case 'product_admin':
        $prodAdmin = new ProductAdminController();
        $prodAdmin->index();
        break;

    case 'product_admin_create':
        $prodAdmin = new ProductAdminController();
        $prodAdmin->create();
        break;

    case 'product_admin_edit':
        $prodAdmin = new ProductAdminController();
        $prodAdmin->edit();
        break;

    case 'product_admin_delete':
        $prodAdmin = new ProductAdminController();
        $prodAdmin->delete();
        break;

        case 'sales':
        $sales = new SalesController();
        $sales->index();
        break;

    case 'sales_create':
        $sales = new SalesController();
        $sales->create();
        break;

    case 'sales_report':
        $sales = new SalesController();
        $sales->report();
        break;


    default:
        header('Location: index.php?page=login');
        break;
}