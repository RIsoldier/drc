<?php

namespace App\Http\Controllers;

use App\Procedure;
use DB;
class ProceduresController extends Controller {
   /* public function procedures()
    {
        $procedures = Procedures::get();
        return view('pages.procedures', compact('procedures'));
    }*/


    public function index()
    {
        $categories = $this->getCategories();
        $procedures = DB::table('procedures')->groupBy('category')->get();

        return view('procedure.index', compact('categories', 'procedures'));
    }

    public function categories($category)
    {
     
        $procedures = DB::table('procedures')->where('name', '=', urldecode($category))->get();

        return view('procedure.view', compact('procedures'));
    }

    public function getCategories($category)
    {
        $category =  DB::table('procedures')->where('category', '=', $category)->get(); 
        return view('procedure.view', compact('category'));       
    }

    /*public function getProcedures($categories)
    {
        $categoryArray = [];
        foreach ($categories as $category) {
            $categoryArray[] = DB::table('procedures')->where('category', '=', $category)->get();
        }
        return view('procedure.view', compact('categoryArray'));
    }*/
}
