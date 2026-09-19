<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Override;

class Event extends Model
{
    
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime'
        ];
    }

    // protected $table = "events"; 
    protected function title() : Attribute
    {
        return Attribute::make(
            set: function($value){ // setter
                return strtolower($value);
            },
            get: function($value){ /// getter
                return ucfirst($value);
            }
        );
    }
}
