<?php

namespace swappco\SanaLogs;


use DB;
use Illuminate\Support\Facades\Auth;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class SanaLoggingHandler extends AbstractProcessingHandler
{

    /**
     * @var string
     */
    private $table;

    public function __construct($level = Logger::DEBUG, $bubble = true) {
        $this->table = 'sanalogs';
        parent::__construct($level, $bubble);
    }
    protected function write(array $record):void
    {
        $data = array(
            'message'       => $record['message'],
            'context'       => json_encode($record['context']),
            'level'         => $record['level'],
            'level_name'    => $record['level_name'],
            'channel'       => $record['channel'],
            'record_datetime' => $record['datetime']->format('Y-m-d H:i:s'),
            'extra'         => json_encode($record['extra']),
            'formatted'     => $record['formatted'],
            'remote_addr'   => $_SERVER['REMOTE_ADDR'],
            'user_agent'    => $_SERVER['HTTP_USER_AGENT'],
            'created_at'    => date("Y-m-d H:i:s"),
        );
        DB::connection()->table($this->table)->insert($data);
    }
}
