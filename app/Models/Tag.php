<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel',
        'beschrijving',
        'aanmaakdatum',
    ];

    protected $primaryKey = 'tag_id';
    public function nieuws_tag(){
        return $this->belongsToMany(NieuwsTag::class, 'nieuws_tag');
    }
}
