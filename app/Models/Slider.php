<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'area', 'image', 'main_section', 'hour', 'active'];
    protected $guarded = ['_token'];

    protected $attributes = [
        'active' => true,
    ];
}
