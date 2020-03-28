<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Period;

class PeriodController extends Controller
{
    public function index(Request $request) {
        $response = [];

        $periodQuery = Period::query();
        $periods = $periodQuery->get();

        $response['message'] = 'success';
        $response['periods'] = $periods;
        return new JsonResponse($response);
    }
}
