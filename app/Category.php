<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Category extends Model
{
    protected $fillable = [
        'name'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];
    public function products(){
       return $this->hasOne('App\Product','category_id');
    }
}
