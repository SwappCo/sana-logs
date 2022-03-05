<?php

namespace swappco\SanaLogs\traits;

trait HasSanaLogs
{
    public function initializeHasSanaLogs(){
        $this->fillable[]='phone';
        $this->fillable[]='attempts_list';
        $this->fillable[]='most_login_with_otp';

    }
}
