<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publish extends Model
{
    protected $guarded = [];

    public function apporteur()
    {
        return $this->belongsTo(User::class);
    }

    public function opportunite()
    {
        return $this->belongsTo(Opportunite::class);
    }
}
