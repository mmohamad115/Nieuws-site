<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nieuw extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel',
        'beschrijving',
        'aanmaakdatum',
        'user_id',
        'categorie_id',
    ];

    protected $primaryKey = 'nieuws_id';

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }    

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function nieuws_tag(){
        return $this->belongsToMany(NieuwsTag::class, 'nieuws_id');
    }
}
    