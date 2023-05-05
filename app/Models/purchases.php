<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{
    public $timestamps = false;
    protected $table = 'purchases';

    protected $fillable = ['product', 'price'];
}
