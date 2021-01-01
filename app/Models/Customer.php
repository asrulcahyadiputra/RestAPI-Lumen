<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    protected $primary_key = "customer_id";
    // protected $fillable = [];

    // public $timestamps = false;
}
