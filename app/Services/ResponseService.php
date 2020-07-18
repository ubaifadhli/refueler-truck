<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;

class ResponseService
{
    public static function getResponse(int $result) : JsonResponse {
        switch ($result) {
            case 1:
                return response()->json(['message' => 'success']);
                break;
            case 0:
                return response()->json(['message' => 'failed']);
                break;
            case -1:
                return response()->json(['message' => 'Unprocessable Entity'], 422);
                break;
            default:
                return response()->json(['message' => 'Bad Request'], 400);
                break;
        }
    }
}
