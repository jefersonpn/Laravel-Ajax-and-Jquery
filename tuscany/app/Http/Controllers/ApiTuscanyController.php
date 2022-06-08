<?php

namespace App\Http\Controllers;

use App\Facades\ApiTuscany;
use Illuminate\Http\Request;

class ApiTuscanyController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function showCategories( Request $request)
    {
      /*   $categories = json_decode( ApiTuscany::get('categories') );
        //dd($categories);
        return view('app')->with(
            'categories', $categories
        );  */
    }

    public function showProducts()
    {
        /* $categories = ApiTuscany::get('categories')->json() ;
        foreach( $categories->response as $category)
        {
            dd($category->products);
        }
        return view('app')->with(
            'products', $products
        ); */
    }
}
