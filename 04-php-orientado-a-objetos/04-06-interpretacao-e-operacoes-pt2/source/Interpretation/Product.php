<?php

namespace Source\Interpretation;

    /* The `class Product` is defining a PHP class called `Product` within the namespace
    `Source\Interpretation`. This class has several methods and properties that handle the setting and
    getting of data, as well as handling method calls and converting the object to a string
    representation. */
class Product
{
    public  $name;
    private $data;
    private $price;

   /**
   * The above function sets a value to a property in a class and throws an error if the property is
   * not found.
   * 
   * @param name The name of the property being set.
   * @param value The value parameter is the value that you want to set for the property.
   */
    public function __set($name, $value)
    {
        $this->notFound(__FUNCTION__, $name);
        $this->data[$name] = $value;
    }

   /**
    * The __get function is used to retrieve the value of a property if it exists in the data array,
    * otherwise it calls the notFound function.
    * 
    * @param name The parameter "name" is the name of the property that is being accessed.
    * 
    * @return If the `` key exists in the `` array, then the value associated with that key
    * will be returned. Otherwise, the `notFound` method will be called.
    */
    public function __get($name)
    {
        if(!empty($this->data[$name])) {
            return $this->data[$name];
        } else {
            $this->notFound(__FUNCTION__, $name);
        }
    }

   /**
    * The __isset function is used to handle the case when an undefined property is checked for
    * existence using the isset() function.
    * 
    * @param name The parameter "name" is the name of the property that is being checked for existence.
    */
    public function __isset($name)
    {
        $this->notFound(__FUNCTION__, $name);
    }

   /**
   * The above function is a magic method in PHP that is called when a method is invoked on an object
   * that does not exist.
   * 
   * @param name The `` parameter is the name of the method that was called.
   * @param arguments The `` parameter is an array that contains the arguments passed to the
   * method when it is called.
   */
    public function __call($name, $arguments)
    {
        $this->notFound(__FUNCTION__, $name);
        var_dump($arguments);
    }

    /**
     * The __toString() function returns a string representation of an object.
     * 
     * @return A string is being returned. The string is formatted as an HTML paragraph element with a
     * class of "trigger". The content of the paragraph includes the text "Este é um objeto da classe"
     * followed by the name of the class.
     */
    public function __toString()
    {
        return "<p class='trigger'>Este é um objeto da classe ". __CLASS__ ."</p>";
    }

    /**
     * The handler function sets the name and price properties of an object, formatting the price with
     * two decimal places and using a comma as the thousands separator.
     * 
     * @param name The name parameter is a string that represents the name of a product or item.
     * @param price The "price" parameter is a numeric value representing the price of an item.
     */
    public function handler($name, $price)
    {
        $this->name     = $name;
        $this->price    = number_format($price,"2",".",",");
    }

    /**
     * The function "notFound" displays an error message indicating that a property does not exist in the
    * current class.
    * 
    * @param method The method parameter is a string that represents the name of the method where the
    * property is being accessed or used.
    * @param name The name parameter is the name of the property that is not found.
    */
    private function notFound($method, $name)
    {
        echo "<p class='trigger error'>{$method}: A propriedade {$name} não existe em ". __CLASS__ ."</p>";
    }

    public function __unset($name)
    {
        trigger_error(__FUNCTION__. ": Acesso negado a propriedade {$name}",
        E_USER_ERROR);
    }
}