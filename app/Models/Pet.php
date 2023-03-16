<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    use HasFactory;
    protected $table = 'pets';

    protected $fillable = [
        'nama',
        'kelamin','jenis',
        'vaksin','umur','image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
