<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

        /**
     * @var array
     */
    protected $fillable = [
        'cep',
        'street',
        'number',
        'neighborhood',
        'city',
        'contact_id',
        'state_id'
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
