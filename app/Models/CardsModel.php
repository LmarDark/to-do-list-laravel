<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardsModel extends Model
{
    protected $table  = 'cards_info';

    protected $fillable = [
        'card_title',
        'card_description',
        'href'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
