<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'postcode',
        'country',
        'amount',
        'description'
    ];
    protected $hidden = ['user_id', 'offertype_id', 'created_at', 'updated_at'];

    /**
     * Get the user that owns the offer.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the offertype associated with the offer.
     */
    public function offertype()
    {
        return $this->hasOne(Offertype::class);
    }
}
