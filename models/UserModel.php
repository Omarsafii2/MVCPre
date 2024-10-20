<?php

class UserModel {
    private $users = [
        ['id' => 1, 'name' => 'John Doe'],
        ['id' => 2, 'name' => 'Jane Smith'],
        ['id' => 3, 'name' => 'Emily Johnson']
    ];

    // Get all users
    public function getAllUsers() {
        return $this->users;
    }

    // Get user by ID
    public function getUserById($id) {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
}
