<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    use HasFactory;
    protected $fillable = [
        'hive_id',
        'honey_id',
        'quantity_kg',
        'price',
    ];

    public function hive()
    {
        return $this->belongsTo(Hive::class);
    }

    public function honey()
    {
        return $this->belongsTo(Honey::class,'honey_id');
    }
    public function honeyCategory()
    {
        return $this->belongsTo(HoneyCategory::class, 'honey_category_id');
    }
}

