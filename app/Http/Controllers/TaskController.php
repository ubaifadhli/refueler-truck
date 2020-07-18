<?php

namespace App\Http\Controllers;

use App\Services\ResponseService;
use App\Services\ScadasService;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Request $request) {
        $this->validate($request, [
            'val' => 'required',
        ]);

        if (strpos($request->input('val'), 'L_File')) {
            $valResponse = explode('=', $request->input('val'))[1];
            $logType = explode(',', $valResponse);
            switch ($logType[0]) {
                case '9':
                    $result = (new TaskService())->saveSystemError($logType);
                    return ResponseService::getResponse($result);
                    break;
                case '11':
                    $result = (new TaskService())->saveTransfer($logType);
                    return ResponseService::getResponse($result);
                    break;
            }
        } elseif (strpos($request->input('val'), 'Warnings') || strpos($request->input('val'), 'Warning')) {
            $warningValue = explode('=', $request->input('val'))[1];
            $result = (new TaskService())->saveWarning($warningValue);

            return ResponseService::getResponse($result);
        }

        return ResponseService::getResponse(-1);
    }

    public function createScadas(Request $request) {
        $this->validate($request, [
            'val' => 'required',
        ]);

        if (strpos($request->input('val'), 'Meter_State')) {
            $meterStateValues = explode('=', $request->input('val'))[1];
            $result = (new ScadasService())->createMeterState(explode(',', $meterStateValues));

            return ResponseService::getResponse($result);
        } elseif (strpos($request->input('val'), 'FilterState')) {
            $filterStateValues = explode('=', $request->input('val'))[1];
            $result = (new ScadasService())->createFilterState(explode(',', $filterStateValues));

            return ResponseService::getResponse($result);
        }

        return ResponseService::getResponse(-1);
    }
}
