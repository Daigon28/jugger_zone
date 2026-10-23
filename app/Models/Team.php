<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
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

    public function getRouteKeyName(){
        return "slug";
    }
}
