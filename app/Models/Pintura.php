<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Artista;

class Pintura extends Model
{
    use HasFactory;
    protected $table = 'pintura';
    public $timestamps = false;

    public function artista(): BelongsTo
    {
        return $this->BelongsTo(Artista::class, 'id_artista', 'id');
    }
}
