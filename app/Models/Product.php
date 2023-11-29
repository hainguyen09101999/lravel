<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   use HasFactory;  
    protected $fillable = [
        'name',
        'slug',
        'price',
        'price_sale',
        'image',
        'danhmuc_id',
        'shortdescription',
        'description',
    
    ];
    public function danhmuc(){
        return $this->belongsTo(Danhmuc::class);
    }
    public function images(){

        return $this->hasMany(ImgProduct::class);
    }
}

