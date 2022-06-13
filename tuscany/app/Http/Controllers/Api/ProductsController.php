<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiTuscany;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ProductsController;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = json_decode(ApiTuscany::get('categories'));
        
        
        return view('app')->with('categories', $categories->response);
    }

    public function getData()
    {
       //
    }



}
