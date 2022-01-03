<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireExtinguisher extends Model
{
    use HasFactory;

    protected $table = 'fire_extinguishers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'location', 'expiry_date', 'serial_numbers', 'type', 'weight', 'brand',
    ];

    public static function primaryKey()
    {
        return (new static())->getPrimaryKey();
    }


    public function branch(){
        return $this->belongsTo(Branch::class, 'location', 'id');
    }
}
