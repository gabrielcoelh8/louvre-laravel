<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Artista;

class Escultura extends Model
{
    use HasFactory;
    protected $table = 'escultura';
    public $timestamps = false;

    public function artista(): BelongsTo
    {
       return $this->belongsTo(Artista::class, 'id_artista', 'id');
    }
}
