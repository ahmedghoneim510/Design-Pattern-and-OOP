<?php

namespace  Creational\Singleton;

class Counter
{
    private static $instance;
    private $count = 0;

    private static $lockFile   = __DIR__ . '/counter_lock';


    private function __construct()
    {
    }

    public static function getInstance(): Counter
    {
        if (self::$instance === null) {
            $file = fopen(self::$lockFile, 'w+');

            if (flock($file, LOCK_EX)) {
                // Double-check if the instance is still null to avoid race condition
                if (self::$instance === null) {
                    self::$instance = new self();
                }

                // Release the lock
                flock($file, LOCK_UN);
            }

            // Close the file
            fclose($file);
        }
        return self::$instance;
    }

    public function increment()
    {
        $this->count++;
    }

    public function getCount(): int
    {
        return $this->count;
    }
    // Prevent the instance from being cloned (which would create a second instance of it)
    public function __clone(){}
    // Prevent from being unserialized (which would create a second instance of it)
    public function __wakeup(){}
}