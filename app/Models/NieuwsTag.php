<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NieuwsTag extends Model
{
    use HasFactory;

    public function nieuws(){
        return $this->hasMany(Nieuw::class, 'nieuws');
    }

    public function tags(){
        return $this->hasMany(Tag::class, 'tags');
    }
}
