<?php

namespace App\Http\Controllers;

use App\Services\ScadasService;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskService;
    private $scadasService;

    public function __construct() {
        $this->taskService = new TaskService();
        $this->scadasService = new ScadasService();
    }

    public function createTask(Request $request) {
        $this->validate($request, [
            'val' => 'required',
        ]);

        if (strpos($request->input('val'), 'L_File')) {
            $valResponse = explode('=', $request->input('val'))[1];
            $logType = explode(',', $valResponse);
            switch ($logType[0]) {
                case '9':
                    $this->taskService->getSystemError09($valResponse);
                    break;
            }
        }
    }

    public function createScadas(Request $request) {
        $this->validate($request, [
            'val' => 'required',
        ]);

        if (strpos($request->input('val'), 'Meter_State')) {
            $meterStateValues = explode('=', $request->input('val'))[1];
            $this->scadasService->getMeterState(explode(',', $meterStateValues));
        } elseif (strpos($request->input('val'), 'FilterState')) {
            $filterStateValues = explode('=', $request->input('val'))[1];
            $this->scadasService->getFilterState(explode(',', $filterStateValues));
        }
    }
}
