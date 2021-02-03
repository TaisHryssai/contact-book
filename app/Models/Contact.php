<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'date_of_birth',
    ];

    protected $dates = [
        'date_of_birth',
    ];

    /**
     * Get the phones for the contact.
     */
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
