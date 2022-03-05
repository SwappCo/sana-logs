<?php

namespace swappco\SanaLogs\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string dosumting()
 * @method static void alert(string $message, array $context = [])
 * @method static void critical(string $message, array $context = [])
 * @method static void debug(string $message, array $context = [])
 * @method static void emergency(string $message, array $context = [])
 * @method static void error(string $message, array $context = [])
 * @method static void info(string $message, array $context = [])
 * @method static void notice(string $message, array $context = [])
 * @method static void warning(string $message, array $context = [])
 * @see  \SwappCo\SanaLogs\SanaLogs
 *
 */
class SanaLogsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SanaLogs';
    }
}
