<?php

class Persona{
    public static $personasEnElMundo = 0;

    /**
     * Persona constructor.
     */
    public function __construct()
    {
        return self::$personasEnElMundo++;
    }



    /**
     * @return int
     */
    public static function getPersonasEnElMundo(): int
    {
        return self::$personasEnElMundo;
    }

    /**
     * @param int $personasEnElMundo
     */
    public static function setPersonasEnElMundo(int $personasEnElMundo): void
    {
        self::$personasEnElMundo = $personasEnElMundo;
    }


}
