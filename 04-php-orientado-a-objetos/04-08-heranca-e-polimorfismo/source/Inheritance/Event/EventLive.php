<?php

namespace Source\Inheritance\Event;

use Source\Inheritance\Address;

class Eventlive extends Event
{
    /**
     *@var Address
     */
    private $address;
    
   /**
    * The function is a constructor that initializes the properties of an object with the given event,
    * date, price, vacancies, and address.
    * 
    * @param event The event parameter is the name or description of the event. It represents the event
    * that is being organized or scheduled.
    * @param \DateTime date The `date` parameter is of type `\DateTime` and represents the date of the
    * event.
    * @param price The price parameter is the cost of the event. It represents the amount of money that
    * participants need to pay in order to attend the event.
    * @param vacancies The "vacancies" parameter represents the number of available spots or openings
    * for the event. It indicates how many people can attend the event before it is considered fully
    * booked.
    * @param Address address The "address" parameter is an instance of the "Address" class. It
    * represents the location of the event.
    */
    public function __construct($event, \DateTime $date, $price, $vacancies, Address $address)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }

    /**
     * The getAddress() function returns the address associated with an object.
     * 
     * @return Address an instance of the Address class.
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
}