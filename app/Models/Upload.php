<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Upload extends Model
{
    protected $table = 'upload';

    protected $fillable = ['nama, album'];

    public function Album() : BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
    public function User() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
