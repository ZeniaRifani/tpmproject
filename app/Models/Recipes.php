<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','origin','publication_date','steps','image','category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');

        }
}
