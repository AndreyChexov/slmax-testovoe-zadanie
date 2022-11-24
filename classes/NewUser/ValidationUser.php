<?php

class ValidationUser
{

    protected $errors = [], $response;

    public function valName ($name) {
        if($name === '') {
            $this->errors[] = 'name';
        }
    }

    public function vallastName ($lastname) {
        if($lastname === '') {
            $this->errors[] = 'lastName';
        }
    }

    public function valCity ($city) {
        if($city === '') {
            $this->errors[] = 'city';
        }
    }

    public function valSex ($sex) {
        if($sex === '') {
            $this->errors[] = 'sex';
        }
    }

    public function valDate ($date) {
        if($date === '') {
            $this->errors[] = 'date';
        }
    }

    public function getResultOfVal () {
        if(!empty($this->errors)) {
            $this->response =  [
                "status" => false,
                "type" => 1,
                "fields" => $this->errors
            ];

            echo json_encode($this->response);

            die();

        }
    }


}