<?php   

namespace Source\Inheritance\Event;

class EventOnline extends Event
{
    private $link;

    /**
    * The function is a constructor that initializes the properties of an object with the given event,
    * date, price, link, and optional vacancies.
    * 
    * @param event The event parameter is the name or description of the event. It could be a string that
    * represents the event's title or a more detailed description of the event.
    * @param \DateTime date The `date` parameter is of type `\DateTime` and represents the date of the
    * event.
    * @param price The price parameter is used to specify the cost or price of the event. It can be a
    * numeric value representing the price in a specific currency.
    * @param link The "link" parameter is a string that represents the URL or hyperlink associated with
    * the event. It can be used to provide additional information or direct users to a website related to
    * the event.
    * @param vacancies The "vacancies" parameter is an optional parameter that represents the number of
    * available vacancies for the event. It is set to null by default, which means that if no value is
    * provided when creating an instance of the class, the vacancies property will be null.
    */
    public function __construct($event, \DateTime $date, $price, $link, $vacancies = null)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    /**
     * The register function increases the number of vacancies, sets the registration details, and displays
     * a success message.
     * 
     * @param fullName The fullName parameter is a string that represents the full name of the person being
     * registered.
     * @param email The email parameter is a string that represents the email address of the person being
     * registered.
     */
    public function register($fullName, $email)
    {
        $this->vacancies += 1;
        $this->setRegister($fullName, $email);
        echo "<p class='trigger accept'>Show {$fullName}, cadastrado com sucesso!</p>";
    }
    
}