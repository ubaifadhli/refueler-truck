<?php

namespace App\Services;

use App\FilterState;
use App\MeterState;
use Exception;

class ScadasService
{
    public function createMeterState(array $meterStateValues) : int {
        if (count($meterStateValues) != 4) {
            return -1;
        }
        try {
            MeterState::create([
                'del_path' => $meterStateValues[0],
                'volume' => $meterStateValues[1],
                'flowrate' => $meterStateValues[2],
                'state' => $meterStateValues[3],
                'user_id' => auth()->user()->id,
            ]);
        } catch (Exception $exception) {
            return 0;
        }

        return 1;
    }

    public function createFilterState(array $filterStateValues) : int {
        if (count($filterStateValues) != 3) {
            return -1;
        }
        try {
            FilterState::create([
                'act_dp' => $filterStateValues[0],
                'dp' => $filterStateValues[1],
                'filter_satur' => $filterStateValues[2],
                'user_id' => auth()->user()->id,
            ]);
        } catch (Exception $exception) {
            return 0;
        }

        return 1;
    }

}
