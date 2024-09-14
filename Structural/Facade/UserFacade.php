<?php

namespace Structural\Facade;

use Exception;

class UserFacade
{
    protected static $serviceInstance;

    protected static function getServiceInstance(): UserServices
    {
        if (!self::$serviceInstance) {
            self::$serviceInstance = new UserServices();
        }
        return self::$serviceInstance;
    }


    /**
     * @throws Exception
     */
    public static function __callStatic($name, $arguments)
    {
        $service=self::getServiceInstance();
        if(method_exists($service,$name)){
            return $service->$name(...$arguments);
        }
        throw new Exception("Method $name not found");
    }

}