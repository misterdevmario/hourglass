<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['restaurant_name', 'type_food', 'section', 'carte_name', 'schedule', 'members', 'active'];
    protected $guarded = ['_token'];

    protected $attributes = [
        'active' => true,
    ];
}
