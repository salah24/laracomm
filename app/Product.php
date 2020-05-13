<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Product extends Model
{

    protected $fillable = [
        'title', 'slug', 'subtitle','description','price','image','category_id','stock'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];
    public function getPrice(){
       $price= $this->price /100 ;
        return number_format($price, 2,',',' ') . "$";
    }
    public function categories(){
        return $this->belongsTo('App\Category','category_id');
    }
}
