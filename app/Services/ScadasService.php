<?php

namespace App\Services;

use Carbon\CarbonInterface;
use Illuminate\Support\Carbon;

class ScadasService
{
    public function getMeterState(array $meterStateValues) {
        $result = [];
        $result['del_path'] = $meterStateValues[0];
        $result['volume'] = $meterStateValues[1];
        $result['flowrate'] = $meterStateValues[2];
        $result['state'] = $meterStateValues[3];

        return $result;
    }

    public function getFilterState(array $filterStateValues) {
        $result = [];
        $result['act_dp'] = $filterStateValues[0];
        $result['dp'] = $filterStateValues[1];
        $result['filter_satur'] = $filterStateValues[2];

        return $result;
    }

}
