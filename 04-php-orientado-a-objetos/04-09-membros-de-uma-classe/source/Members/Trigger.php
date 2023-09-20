<?php 

namespace Source\Members;

class Trigger
{
    private const TRIGGER   = "trigger";
    public const ACCEPT    = "accept";
    public const WARNING   = "warning";
    public const ERROR     = "error";

    private static $message;
    private static $errorType;
    private static $error;
    
  /**
   * The function "show" in PHP displays an error message with an optional error type.
   * 
   * @param message The message parameter is a string that represents the error message that you want
   * to display.
   * @param errorType The errorType parameter is an optional parameter that specifies the type of
   * error. It can be used to categorize different types of errors or to provide additional information
   * about the error. If no errorType is provided, it will default to null.
   */
    public static function show($message, $errorType = null)
    {
        self::setError($message, $errorType);
        echo self::$error;
    }

   /**
    * The function "push" sets an error message and type, and returns the error message.
    * 
    * @param message The message parameter is a string that represents the error message that you want
    * to push.
    * @param errorType The errorType parameter is an optional parameter that specifies the type of
    * error. It can be used to categorize different types of errors or provide additional information
    * about the error. If no errorType is provided, it will default to null.
    * 
    * @return the value of the static property ``.
    */
    public static function push($message, $errorType = null)
    {
        self::setError($message, $errorType);
        return self::$error;
    }

   /**
    * The function sets an error message and error type for a class in PHP.
    * 
    * @param message The "message" parameter is a string that represents the error message that you
    * want to set. It can be any text that you want to display as the error message.
    * @param errorType The `errorType` parameter is used to specify the type of error that occurred. It
    * is an optional parameter and can be any value that is defined as a constant in the class where
    * this method is defined.
    */
    private static function setError($message, $errorType)
    {
        $reflection = new \ReflectionClass(__CLASS__);
        $errorTypes = $reflection->getConstants();

        self::$message = $message;
        self::$errorType = (!empty($errorType) || in_array($errorType, $errorTypes) ? " {$errorType}" : "");
        self::$error = "<p class='" . self::TRIGGER . self::$errorType . "'>" . self::$message . "</p>";

    }
}