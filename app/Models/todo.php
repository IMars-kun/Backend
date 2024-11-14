<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $fillable = ['judul', 'deeskripsi', 'is_completed'];
}
