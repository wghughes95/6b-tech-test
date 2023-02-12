<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flexibility extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function valet()
    {
        return $this->hasOne(Valet::class);
    }
}
