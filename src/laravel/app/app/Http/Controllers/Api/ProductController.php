<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        $response = [];

        $productQuery = Product::query();
        $products = $productQuery->get();

        $response['message'] = 'success';
        $response['products'] = $products;
        return new JsonResponse($response);
    }
}
