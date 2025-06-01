<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'status',
        'link',
        'image'
    ];
    protected $casts = [
        'status' => 'string',
        'link' => 'string',
        'image' => 'string',
    ];
    protected $attributes = [
        'status' => 'active', // Default status
        'link' => null, // Default link
        'image' => null, // Default image
    ];
    protected $table = 'projects'; // Specify the table name if it differs from the model name
}
