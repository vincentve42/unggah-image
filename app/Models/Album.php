<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    protected $fillable = ['nama'];

    protected $table = 'album';

    public function Upload(): HasMany
    {
        return $this->hasMany(Upload::class);
    }
}
