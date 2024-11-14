<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara massal.
     */
    protected $fillable = [
        'title', 
        'completed'
    ];

    /**
     * Default nilai untuk atribut model.
     */
    protected $attributes = [
        'completed' => false,
    ];
}
