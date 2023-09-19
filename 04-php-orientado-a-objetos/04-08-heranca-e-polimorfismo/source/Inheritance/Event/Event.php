<?php

/* The line `namespace Source\Inheritance\Event;` is declaring the namespace for the `Event` class.
Namespaces are used to organize code into logical groups and prevent naming conflicts. In this case,
the `Event` class is part of the `Source\Inheritance\Event` namespace, which indicates that it
belongs to the `Event` subdirectory of the `Inheritance` directory within the `Source` namespace. */
namespace Source\Inheritance\Event;

class Event
{
    private $event;
    private $date;
    private $price;

    private $register;
    protected $vacancies;

  /**
   * The function is a constructor that initializes the properties of an object.
   * 
   * @param event The event parameter is the name or description of the event. It could be a string
   * that represents the event's name or a more detailed description of the event.
   * @param \DateTime date The `date` parameter is of type `\DateTime` and represents the date of the
   * event. It is expected to be an instance of the `\DateTime` class, which is a built-in PHP class
   * for working with dates and times.
   * @param price The "price" parameter is used to store the price of the event. It represents the cost
   * that participants need to pay in order to attend the event.
   * @param vacancies The "vacancies" parameter represents the number of available spots or openings
   * for the event. It indicates how many people can still register or attend the event.
   */
    public function __construct($event, \DateTime $date, $price, $vacancies)
    {
        $this->event        = $event;
        $this->date         = $date;
        $this->price        = $price;
        $this->vacancies    = $vacancies;
    }

    /**
     * The register function checks if there are vacancies available and if so, decreases the number of
     * vacancies, sets the register with the provided full name and email, and displays a success
     * message. If there are no vacancies available, it displays an error message.
     * 
     * @param fullName The fullName parameter is a string that represents the full name of the person
     * registering for a vacancy.
     * @param email The email parameter is a string that represents the email address of the person
     * registering for a vacancy.
     */
    public function register($fullName, $email)
    {
        if ($this->vacancies >= 1){
            $this->vacancies -= 1;
            // seta o valor na função setRegister
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        } else {
            echo "<p class='trigger error'>Desculpe {$fullName}, as vagas esgotaram!</p>";
        }
    }

   /**
    * The function "setRegister" sets the "register" property of an object with the provided full name
    * and email.
    * 
    * @param fullName The fullName parameter is a string that represents the full name of a person.
    * @param email The email parameter is a string that represents the email address of the user.
    */
    protected function setRegister($fullName, $email)
    {
        $this->register = [
            "name"  => $fullName,
            "email" => $email
        ];
    }

    /**
     * The function "getEvent" returns the value of the "event" property.
     * 
     * @return the value of the property "event".
     */
    public function getEvent()
    {
        return $this->event;
    }

  /**
   * The getDate function returns the formatted date and time in the format "d/m/Y H:i".
   * 
   * @return the formatted date in the format "d/m/Y H:i".
   */
    public function getDate()
    {
        return $this->date->format("d/m/Y H:i");
    }

   /**
    * The getPrice() function returns the price formatted with two decimal places and comma as the
    * thousands separator.
    * 
    * @return The getPrice() function is returning the price formatted as a string with two decimal
    * places and using a comma as the thousands separator.
    */
    public function getPrice()
    {
        return number_format($this->price,"2", ".", ",");
    }

    /**
     * The getRegister function returns the value of the register property.
     * 
     * @return The register property is being returned.
     */
    public function getRegister()
    {
        return $this->register;
    }

   /**
    * The function "getVacancies" returns the vacancies property of the current object.
    * 
    * @return the value of the variable ->vacancies.
    */
    public function getVacancies()
    {
        return $this->vacancies;
    }
}