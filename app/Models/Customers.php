<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    protected $table = "customers";
    protected $fillable = [
        "CustomerName",
        "DateOfBirth",
        "Address",
        "Phone",
        "Email"
    ];
    protected $primaryKey = "id";
}
