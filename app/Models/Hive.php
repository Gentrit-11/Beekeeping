<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hive extends Model
{
    protected $table = 'hive';

    public $timestamps = true; // Assuming you want to manage timestamps

    protected $fillable = [
        'HiveColor',
        'HiveID'
        // You don't need to include HiveID here since it's the primary key and will be auto-generated
    ];
    protected $primaryKey = 'id';
    // No need for relationships or additional logic in this case
}
