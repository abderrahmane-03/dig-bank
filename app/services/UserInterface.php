<?php


interface UserInterface {
    public function getAllUser();
    public function getUserById($UserId);
    public function addUser(User $user);
    public function updateUser(User $user);
    public function deleteUser($UserId);
}


?>