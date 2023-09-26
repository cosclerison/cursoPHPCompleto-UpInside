<?php 

namespace Source\Database\Entity;

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class UserEntity
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $document;

    public function getFirstName()
    {
        Return $this->firstName;
    }
}