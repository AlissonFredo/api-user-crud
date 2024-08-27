<?php

namespace app\models;

class User
{
    private $id;
    private $name;
    private $email;
    private $phoneNumber;
    private $birthDate;
    private $address;
    private $createdAt;
    private $updatedAt;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function __toString()
    {
        $id = $this->id ?? 'N/A';
        $name = $this->name ?? 'N/A';
        $email = $this->email ?? 'N/A';
        $phoneNumber = $this->phoneNumber ?? 'N/A';
        $birthDate = $this->birthDate ?? 'N/A';
        $address = $this->address ?? 'N/A';
        $createdAt = $this->createdAt ?? 'N/A';
        $updatedAt = $this->updatedAt ?? 'N/A';

        return "User [
            id={$id}, 
            name={$name}, 
            email={$email}, 
            phoneNumber={$phoneNumber}, 
            birthDate={$birthDate}, 
            address={$address}, 
            createdAt={$createdAt}, 
            updatedAt={$updatedAt}
        ]";
    }
}
