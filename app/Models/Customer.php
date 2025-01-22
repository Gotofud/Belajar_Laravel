<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['id','name_customer','gender','contact'];
    public $timestamp = true;
    use HasFactory;

    public function order(){
        return $this->hasMany(Order::class);
    }
}
