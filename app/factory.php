<?

namespace App;

use Exception;


final class factory
{

    private static $objectErr = "You can\'t send objects";
    private static $nullErr = "You can\'t send blank";
    private static $IntErr = "You can\'t send numbers";
    private static $globalerr = "Just type the name of the class.";
    private static $ntfErr = "This class could not be found";


    final static function load($class)
    {
        if (is_object($class)) {
            self::error("obj");
        } else if ($class == NULL) {
            self::error("null");
        } else if (gettype($class) == "integer" || gettype($class) == "int") {
            self::error("int");
        } else if (gettype($class) == "string") {
            $class = "Libs\\$class";
            if (class_exists($class)) {
                return new $class;
            } else {
                self::error("str");
            }
        } else {
            self::error("glob");
        }
        return false;

    }

    private static function error($err)
    {
        switch ($err) {
            case "obj":
                throw new Exception(self::$objectErr);
                break;
            case "null":
                throw new Exception(self::$nullErr);
                break;
            case "int":
                throw new Exception(self::$IntErr);
                break;
            case "str":
                throw new Exception(self::$ntfErr);
                break;
            case "glob":
                throw new Exception(self::$globalerr);
        }
    }
}


