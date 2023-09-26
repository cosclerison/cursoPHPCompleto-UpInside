<?php

namespace Source\Traits;

trait UserTrait
{
    private $user;

   /**
    * The function `getUser()` returns the User object.
    * 
    * @return User an instance of the User class.
    */
    public function getUser(): User
    {
        return $this->user;
    }

/**
 * The function sets the user property of the current object to the provided User object.
 * 
 * @param User user The "user" parameter is of type "User".
 */
    public function setUser(User $user)
    {
        $this->user = $user;
    }
}