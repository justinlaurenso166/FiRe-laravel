<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "user";
    protected $fillable = ['id','username','name','password','address','lat','lng'];

    public $timestamps = false;
}