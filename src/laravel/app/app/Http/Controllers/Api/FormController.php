<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Form;

class FormController extends Controller
{
    public function index(Request $request) {
        $response = [];

        $formQuery = Form::query();
        $forms = $formQuery->get();

        $response['message'] = 'success';
        $response['forms'] = $forms;
        return new JsonResponse($response);
    }
}
