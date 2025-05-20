<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ibadah extends Model
{
    protected $table = 'ibadahs';
    protected $fillable = [
        'name',
        'jenis',
        'waktu',
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }
}
