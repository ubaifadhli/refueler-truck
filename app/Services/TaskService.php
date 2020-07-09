<?php

namespace App\Services;

use Illuminate\Support\Carbon;

class TaskService
{
    public function getSystemError09(array $logFile) : array {
        $result = [];
        $result['timestamp'] = $this->getCarbonDateFromString($logFile[4]);
        $result['dev_id'] = $logFile[5];
        $result['error_code'] = $logFile[6];
        $result['rcpt_no'] = $logFile[7];
        $result['met_no'] = $logFile[8];
        $result['submod_id'] = $logFile[9];
        $result['err_add'] = $logFile[10];

        if ($logFile[10] != '0') {
            $result['err_info'] = [];
            for ($i = 11; $i < count($logFile); $i++) {
                $result['err_info'][] = $logFile[$i];
            }
        }

        return $result;
    }

    private function getCarbonDateFromString(string $date) {
        $year = intval(substr($date, 0, 4));
        $month = intval(substr($date, 4, 2));
        $day = intval(substr($date, 6, 2));
        $hour = intval(substr($date, 8, 2));
        $minute = intval(substr($date, 10, 2));
        $second = intval(substr($date, 12, 2));

        return Carbon::create($year, $month, $day, $hour, $minute, $second);
    }
}
