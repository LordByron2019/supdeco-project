<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function parcours()
    {
        return $this->hasMany(Parcour::class);
    }

    public function filieres()
    {
        return $this->hasManyThrough(Filiere::class, Parcour::class);
    }


}
