<?php

namespace App;

interface UserRepositoryInterface

{
    public function getUsers();
    public function getUser($id);
    public function createUser();
    public function updateUser($id);
    public function deleteUser($id);

}

interface ReadUserRepositoryInterface{
    public function getUsers();
    public function getUser($id);

}

interface WriteUserRepositoryInterface{
    public function createUser();
    public function updateUser($id);
    public function deleteUser($id);

}
