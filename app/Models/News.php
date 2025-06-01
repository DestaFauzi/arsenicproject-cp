<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
        'status',
        'link',
        'image',
        'published_at',
        'author',
        'category',
        'tags',
        'source',
        'source_link',
        'language'
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
    protected $attributes = [
        'status' => 'active', // Default status
        'link' => null, // Default link
        'image' => null, // Default image
        'language' => 'id', // Default language
    ];
    protected $table = 'news'; // Specify the table name if it differs from the model name
    public function getStatusAttribute($value)
    {
        return $value ?: 'active'; // Return 'active' if status is null
    }
    public function getLanguageAttribute($value)
    {
        return $value ?: 'id'; // Return 'id' if language is null
    }

}
