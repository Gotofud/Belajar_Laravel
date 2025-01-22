<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['id','name_product','merk','price','stock'];
    public $timestamp = true;
    use HasFactory;

    public function order(){
        return $this->hasMany(Order::class);
    }
}
