<?php


class CreateUser
{
    protected  $name, $lastName, $city, $sex, $date;


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }


    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }


    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }


    public function setSex($sex)
    {
        $this->sex = $sex;
    }


    public function getSex()
    {
        return $this->sex;
    }
}