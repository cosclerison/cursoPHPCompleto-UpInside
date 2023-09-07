<?php

/* The line `namespace Source\Interpretation;` is declaring the namespace for the `User` class. A
namespace is a way to organize code into logical groups and prevent naming conflicts. In this case,
the `User` class is being placed in the `Source\Interpretation` namespace. This means that when
using the `User` class, it needs to be referenced with its full namespace, like
`Source\Interpretation\User`. */
namespace Source\Interpretation;

/* The `class User` is defining a user object with properties for first name, last name, and email. It
also includes a constructor to initialize these properties, as well as getter functions to retrieve
the values of these properties. */
class User
{
    private $firstName;
    private $lastName;
    private $email;

 /**
  * The function is a constructor that initializes the firstName, lastName, and email properties of an
  * object.
  * 
  * @param firstName The firstName parameter is used to store the first name of a person.
  * @param lastName The `lastName` parameter is used to store the last name of a person.
  * @param email The email parameter is an optional parameter that can be passed to the constructor. It
  * allows you to provide an email address for the object being created. If no email address is
  * provided, the value of the email property will be set to null.
  */
    public function __construct($firstName, $lastName, $email = null)
    {
        $this->firstName = $firstName;    
        $this->lastName = $lastName;    
        $this->email = $email;    
    }

    public function __clone()
    {
        $this->firstName = null;
        $this->lastName = null;
        echo "<p class='trigger warning'>Clonou!</p>";
    }

    public function __destruct()
    {
        var_dump($this);
        echo "<p class='trigger accept'>O objeto {$this->firstName} foi destruído</p>";
    }

   /**
    * The above code defines three getter functions in PHP for retrieving the first name, last name,
    * and email of an object.
    * 
    * @return The functions are returning the values of the properties , , and
    *  respectively.
    */
    public function getFistName()
    {
        return $this->firstName;
    }

   /**
    * The setFirstName function sets the value of the firstName property.
    * 
    * @param firstName The parameter "firstName" is a variable that represents the first name of a
    * person.
    */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

   /**
    * The getLastName function returns the value of the lastName property.
    * 
    * @return The last name of the object.
    */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * The setLastName function sets the value of the lastName property.
     * 
     * @param lastName The parameter "lastName" is a string that represents the last name of a person.
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

  /**
   * The getEmail() function returns the email property of the current object.
   * 
   * @return The email property of the object.
   */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * The setEmail function sets the email property of an object.
     * 
     * @param email The email parameter is a string that represents the email address to be set for an
     * object.
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}