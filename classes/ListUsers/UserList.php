<?php

class UserList

{
    protected $getUsersList, $response;

    public function setListUsers ($connect) {
        $this->getUsersList = mysqli_query($connect, "SELECT * FROM `users`");
    }

    public function getListUsers () {
        return $this->getUsersList;
    }
    public function delUser ($connect) {

        $id = $_GET['id'];

        mysqli_query($connect, "DELETE FROM `users` WHERE `id` = $id");

    }


}
