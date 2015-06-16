<?php

class Error
{

    const CLASSNAME = 'ERRORLOG';

    public static function log()
    {
        Log::log(self::CLASSNAME, File::tail(Settings::$error_log, 50));
    }

}

