<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_url',
    ];

    //creation methode des choix , u chapitre a plusieurs choix
    // un choix appartient a un chapitre
    public function choices()
    {
        return $this->hasMany(\App\Models\Choice::class);
      
    }

}

