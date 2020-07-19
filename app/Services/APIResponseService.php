<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;

class APIResponseService
{
    public static function getResponse(int $result, int $statusCode = 200) : JsonResponse {
        switch ($result) {
            case 1:
                return response()->json(['message' => 'success'], $statusCode);
                break;
            case 0:
                return response()->json(['message' => 'failed'], $statusCode);
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
