<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    public $table = "follow";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
