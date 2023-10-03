<?php 

namespace Source\Models;
use PDOException;

abstract class Models
{
    /** @var object|null */
    protected $data;

    /** @var PDOException|null */
    protected $fail;

    /** @var string|null */
    protected $message;

   /**
    * The function `getData` returns an object or null.
    * 
    * @return ?object an object or null.
    */
    public function data(): ?object
    {
        return $this->data;
    }

   /**
    * The function returns the PDOException object associated with a failed database operation.
    * 
    * @return PDOException a PDOException object.
    */
    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

   /**
    * The function `getMessage()` returns a nullable string value.
    * 
    * @return ?string a nullable string.
    */
    public function message(): ?string
    {
        return $this->message;
    }

    protected function create()
    {

    }

    protected function read()
    {

    }

    protected function update()
    {

    }

    protected function delete()
    {
         
    }

   /**
    * The function "safe" is a protected method in PHP that returns an optional array.
    * @return null
    */
    protected function safe(): void
    {

    }

    private function filter()
    {

    }
}
