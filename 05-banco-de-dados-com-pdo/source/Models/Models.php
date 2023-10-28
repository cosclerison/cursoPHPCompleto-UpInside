<?php 

namespace Source\Models;
use PDOException;
use Source\Database\Connect;

abstract class Models
{
    /** @var object|null */
    protected $data;

    /** @var PDOException|null */
    protected $fail;

    /** @var string|null */
    protected $message;

    public function __set($name, $value)
    {
        if(empty($this->data)) {
            $this->data = new \stdClass();
        }
        $this->data->$name = $value;
    }

    public function __isset($name)
    {
        return isset($this->data->$name);
    }

    public function __get($name)
    {
        return ($this->data->$name ?? null);
    }

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

    /**
     * @param string $select
     * @param string|null $params
     * @return null|\PDOStatement
     */
    protected function read(string $select, string $params = null): ?\PDOStatement
    {
        try {
            $stmt = Connect::getInstance()->prepare($select);
            if (!empty($params)) {
                parse_str($params, $params);
                foreach ($params as $key => $value) {
                    $type = (is_numeric($value) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                    $stmt->bindValue(":{$key}", $value, $type);
                }
            }

            $stmt->execute();
            return $stmt;
        } catch (\PDOException $exception) {
            $this->fail = $exception;
            return null;
        }
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
