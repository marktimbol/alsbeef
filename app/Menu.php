<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

class Menu extends Model
{
    use AlgoliaEloquentTrait;

    protected $fillable = ['name', 'slug', 'description'];

    public static $autoIndex = true;
    public static $autoDelete = true;
    public $indices = ['alsbeef_menus'];

    public function getRouteKeyName()
    {
    	return 'id';
    }

    public function setNameAttribute($name)
    {
    	$this->attributes['name'] = $name;
    	$this->attributes['slug'] = str_slug($name);
    }
}
