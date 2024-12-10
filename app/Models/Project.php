<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'long_description',
        'url',
        'tools_used',
        'time_taken',
        'features',
        'image_path',  // Add the image_path to fillable
    ];

    // If you want to handle image uploads automatically, you can define a method to store the image
    public function setImagePathAttribute($value)
    {
        if (is_object($value)) {
            $this->attributes['image_path'] = $value->store('projects', 'public');
        }
    }
}

