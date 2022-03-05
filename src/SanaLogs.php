<?php

namespace swappco\SanaLogs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Monolog\Logger;


class SanaLogs
{

    /**
     * Create a custom Monolog instance.
     *
     *
     * @param array $config
     * @return \Monolog\Logger
     */


    public function __invoke(array $config)
    {

        $logger = new Logger("SanaLoggingHandler");

        return $logger->pushHandler(new SanaLoggingHandler());
    }

    public static function my_log($record)
    {
        return $record;
    }

    public function info(string $message, array $context = []): void
    {
        $this->writeLog(__FUNCTION__, $message, $context);
    }

    public function error(string $message, array $context = []): void
    {
    }

    public function debug(string $message, array $context = []): void
    {
    }

    public function alert(string $message, array $context = []): void
    {
    }

    public function critical(string $message, array $context = []): void
    {
    }

    public function emergency(string $message, array $context = []): void
    {
    }

    public function notice(string $message, array $context = []): void
    {
    }

    public function warning(string $message, array $context = []): void
    {
    }

    private function writeLog(string $__FUNCTION__, string $message, array $context)
    {
        $record = [
            'level' => '200',
            'level_name' => $__FUNCTION__,
            'message' => $message,
            'channel' => 'local',
            'extra' =>'extra',
            'context' => json_encode($context),
            'formatted' => json_encode($context),
            'record_datetime' => date("Y-m-d H:i:s"),
            'remote_addr' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'created_at' => date("Y-m-d H:i:s")
        ];

        DB::connection()->table('sanalogs')->insert($record);


    }
}
