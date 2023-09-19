<?php

namespace Source\Inheritance;

class Address
{
    private $street;
    private $number;
    private $complement;

    /**
     * The function is a constructor that initializes the street, number, and complement properties of an
     * object.
     * 
     * @param street The street parameter is used to store the name of the street where the address is
     * located.
     * @param number The "number" parameter represents the street number of an address.
     * @param complement The "complement" parameter is an optional parameter that can be passed to the
     * constructor. It represents any additional information or details about the address that can help
     * provide more specific location information. It is set to null by default, meaning if no value is
     * provided when creating an instance of the class, the
     */
    public function __construct($street, $number, $complement = null)
    {
        $this->street       = $street;
        $this->number       = $number;
        $this->complement   = $complement;
    }

   /**
    * The function "getStreet" returns the value of the "street" property.
    * 
    * @return The value of the property "street" is being returned.
    */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * The function "getNumber" returns the value of the "number" property.
     * 
     * @return the value of the property "number".
     */
    public function getNumber()
    {
        return $this->number;
    }

   /**
    * The getComplement function returns the complement property of the object.
    * 
    * @return The value of the property "complement" is being returned.
    */
    public function getComplement()
    {
        return $this->complement;
    }
}