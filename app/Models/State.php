<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /**
     * @var array
    */
    protected $fillable = [
        'name',
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
