<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nav extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded  = array('id');

    public function categories()
    {
        return DB::table('procedure_categories')->get();
    }
    
    public function subCategories($category)
    {
        return DB::table('procedures')->where('category', '=', $category)->get();
    }
}