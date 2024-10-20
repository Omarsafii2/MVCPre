<?php

// Load the model and controller
include '../models/UserModel.php';
include '../controllers/UserController.php';

// Routing
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controller == 'user') {
    $userController = new UserController();

    if ($action == 'index') {
        $userController->index();
    } elseif ($action == 'show' && isset($_GET['id'])) {
        $userController->show($_GET['id']);
    } else {
        echo "Action not found.";
    }
} else {
    echo "Controller not found.";
}
