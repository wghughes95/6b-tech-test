<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valet extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function flexibility()
    {
        return $this->belongsTo(Flexibility::class);
    }
}
