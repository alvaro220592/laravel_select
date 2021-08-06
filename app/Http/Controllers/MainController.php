<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Subcategory;

class MainController extends Controller
{
    public function index(){
        $data = Category::all();
        // $data = DB::table('categories')->get();

        return view('index', [
            'data' => $data,
        ]);
    }

    public function getSubCategories($id){
        // echo json_encode(DB::table('subcategories')->where('category_id', $id)->get());
        return json_encode(Subcategory::where('category_id', $id)->get());
    }
}
