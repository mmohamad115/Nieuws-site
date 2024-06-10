<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel',
        'beschrijving',
        'aanmaakdatum',
    ];

    protected $primaryKey = 'categorie_id';

    
    public function nieuws(){
        return $this->hasMany(Nieuw::class);
    }    

}
