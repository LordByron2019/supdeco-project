<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcour extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}
