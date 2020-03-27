<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Composer;

class ComposerController extends Controller
{
    public function index(Request $request) {
        $response = [];

        $composerQuery = Composer::query();
        $composers = $composerQuery->get();

        $response['message'] = 'success';
        $response['composers'] = $composers;
        return new JsonResponse($response);
    }
}
