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
        $procedures = DB::table('procedures')->groupBy('category')->get();

        return view('procedure.index', compact('procedures'));
    }

    public function categories($category)
    {
     
        $procedures = DB::table('procedures')->where('name', '=', urldecode($category))->get();
        $links      = $this->getCategory($procedures);


        return view('procedure.view', compact('procedures', 'links'));
    }

    public function getCategories($category)
    {
        $category =  DB::table('procedures')->where('category', '=', $category)->get(); 
        return view('procedure.view', compact('category'));       
    }

    public function getCategory($value)
    {
        return DB::table('procedures')->where('category', '=', $value[0]->category)->get();
    }
}
