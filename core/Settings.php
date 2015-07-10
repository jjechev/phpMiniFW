<?php

Settings::settingsInit();

class Settings extends Config
{
    public static function settingsInit()
    {
        error_reporting(self::$errorReporting);
        ini_set('log_errors', TRUE);
        
        self::$projectFullPath = realpath(__dir__ . "/../");
        self::$projectFullPublicPath = self::$projectFullPath . '/' . self::$projectFullPublicPath;

        ini_set('log_errors', TRUE);
        //ini_set("error_log", $errorLogFile);
    }

    public static function displayErrors($key = 'On')
    {
        if ($key == 'On' || $key == 'Off')
            ini_set('display_errors', $key);
    }

    public static function getRoute($route)
    {
        if (!array_key_exists($route, self::$routePath))
            return null;
        return self::$routePath[$route][1];
    }

}
