<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function livres()
    {
        return $this->hasMany(Livre::class, 'categorie_id', 'id');
    }
}
