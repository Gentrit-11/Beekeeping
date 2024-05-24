<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honey extends Model
{
    use HasFactory;

    protected $table = 'honey';

    protected $fillable = [
        'hive_id',
        'kind_of_honey',
        'quantity_kg',
        'honey_category_id', // Add this field to link to the honey category
    ];

    // Define the relationship with the Hive model
    public function hive()
    {
        return $this->belongsTo(Hive::class);
    }

    // Define the relationship with the HoneyCategory model
    public function category()
    {
        return $this->belongsTo(HoneyCategory::class, 'honey_category_id');
    }
}
