<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {

        $query = $_GET['query'];

        $products = Product::where('name', 'LIKE', "%{$query}%")->get();

        return response()->json($products);
    }
}
