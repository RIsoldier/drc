<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class ProcedureCategory extends Model
{

	public function category()
	{
		return $this->category;
	}

	public function descriptionShort()
	{
		return nl2br($this->description_short);
	}

	public function descriptionLong()
	{
		return nl2br($this->description_long);
	}	

	public function image()
	{
		return $this->image;
	}

}
