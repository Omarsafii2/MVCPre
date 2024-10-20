<?php

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    // Show all users
    public function index() {
        $users = $this->model->getAllUsers();
        include '../views/user_list.php'; // Load the view to display users
    }

    // Show user details by ID
    public function show($id) {
        $user = $this->model->getUserById($id);
        if ($user) {
            include '../views/user_detail.php'; // Load the view to display the user detail
        } else {
            echo "User not found.";
        }
    }
}
