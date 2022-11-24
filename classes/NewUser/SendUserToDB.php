<?php


class SendUserToDB
{
    protected $response, $checkName;

    public function CheckName ($connect, $name) {
        $this->checkName = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$name'");

        if(mysqli_num_rows($this->checkName) > 0) {
            $this->response =  [
                "status" => false,
                "type" => 2,
                "fields" => ['name']
            ];

            echo json_encode($this->response);

            die();
        }
    }


    public function sendToDB ($lastName, $date, $city, $name, $sex, $connect) {

        if(mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `lastName`, `birth`, `sex`, `city`) VALUES (NULL, '$name', '$lastName', '$date', '$sex', '$city')")) {

            $this->response =  [
                "status" => true
            ];

            echo json_encode($this->response);


        } else {
            $this->response =  [
                "status" => false
            ];

            echo json_encode($this->response);
        }
    }

    public function getAge ($val) {
        $birth_time = strtotime($val);
        $age = date("Y") - date('Y', $birth_time);
        if(date('md', $birth_time) > date('md')) {
            $age--;
        }
        return $age;
    }


}




