<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Nav extends Model
{
    //protected $table = 'procedures';

    public static function getCategories()
    {
    	$categories = DB::table('procedures')
            ->select('category')
            ->groupBy('category')
            ->get();
        //$categorized = ['name' => []]
    	foreach ($categories as $k => $v) {
    		$categorized[$v->category] = Nav::getNameByCategory($v->category);
    	}

    	return $categorized;
        //var_dump($categorized);
    }

    
    public static function getNameByCategory($category)
    {
    	return DB::table('procedures')->where('category', '=', $category)->get();
    }

    public static function getProducts()
    {
        $categories = DB::table('products')
            ->select('category')
            ->groupBy('category')
            ->get();
        //$categorized = ['name' => []]
        foreach ($categories as $k => $v) {
            $categorized[$v->category] = Nav::getProductByCategory($v->category);
        }

        return $categorized;
        //var_dump($categorized);
    }

    
    public static function getProductByCategory($category)
    {
        return DB::table('products')->where('category', '=', $category)->get();
    }

}
