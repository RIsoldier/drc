<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	public function name()
	{
		return $this->name;
	}

	public function category()
	{
		return $this->category;
	}

	public function description()
	{
		return $this->description;
	}
	
	public function image()
	{
		return $this->image;
	}

}
