<?php

namespace App\Services;

use App\SystemError;
use App\Transfer;
use App\Warning;
use Exception;
use Illuminate\Support\Carbon;

class TaskService
{
    public function saveSystemError(array $errorFile) : int {
        if (count($errorFile) < 8) {
            return -1;
        }
        try {
            $systemError = new SystemError();
            $systemError->timestamp = $this->getCarbonDateFromString($errorFile[1]);
            $systemError->dev_id = $errorFile[2];
            $systemError->error_code = $errorFile[3];
            $systemError->rcpt_no = $errorFile[4];
            $systemError->met_no = $errorFile[5];
            $systemError->submod_id = $errorFile[6];
            $systemError->err_add = $errorFile[7];
            $systemError->user_id = auth()->user()->id;
            $systemError->save();

            if ($errorFile[7] != '0') {
                for ($i = 8; $i < count($errorFile); $i++) {
                    $systemError->errorInfo()->create([
                        'value' => $errorFile[$i],
                    ]);
                }
            }
        } catch (Exception $exception) {
            return 0;
        }

        return 1;
    }

    public function saveTransfer(array $transferFile) : int {
        if (count($transferFile) != 47) {
            return -1;
        }

        try {
            Transfer::create([
                'end_time' => $transferFile[1],
                'rcpt_no' => $transferFile[2],
                'dl_type' => $transferFile[3],
                'met_prod' => $transferFile[4],
                'cntr_no' => $transferFile[5],
                'unit_msr' => $transferFile[6],
                'vol_grs' => $transferFile[7],
                'vol_t0' => $transferFile[8],
                'avg_temp' => $transferFile[9],
                'cpt_no' => $transferFile[10],
                'del_path' => $transferFile[11],
                'add_no' => $transferFile[12],
                'add_id' => $transferFile[13],
                'add_txt' => $transferFile[14],
                'add_vol' => $transferFile[15],
                'vol_sum' => $transferFile[16],
                'start_time' => $transferFile[17],
                'ord_amnt' => $transferFile[18],
                'art_no' => $transferFile[19],
                'art_id' => $transferFile[20],
                'art_txt' => $transferFile[21],
                'vol_weight' => $transferFile[22],
                'plan_id' => $transferFile[23],
                'ord_no' => $transferFile[24],
                'pmp_rate' => $transferFile[25],
                'del_stat' => $transferFile[26],
                'approved' => $transferFile[27],
                'pid_man' => $transferFile[28],
                'pid_serial' => $transferFile[29],
                'pid_grade' => $transferFile[30],
                'object_id' => $transferFile[31],
                'gantry_id' => $transferFile[32],
                'connect_id' => $transferFile[33],
                'error' => $transferFile[34],
                'add_error' => $transferFile[35],
                'met_err' => $transferFile[36],
                'deviations' => $transferFile[37],
                'print_no' => $transferFile[38],
                'stop_time' => $transferFile[39],
                'metp_no' => $transferFile[40],
                'tr_id' => $transferFile[41],
                'lr_id' => $transferFile[42],
                'lr_random' => $transferFile[43],
                'reseal_t' => $transferFile[44],
                'col_no' => $transferFile[45],
                'signature' => $transferFile[46],
                'user_id' => auth()->user()->id,
            ]);
        } catch (Exception $exception) {
            return 0;
        }

        return 1;
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

    public function saveWarning(string $warningValue) : int {
        try {
            Warning::create([
                'user_id' => auth()->user()->id,
                'value' => $warningValue,
            ]);
        } catch (Exception $exception) {
            return 0;
        }

        return 1;
    }
}
