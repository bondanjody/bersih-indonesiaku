<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuan extends Model
{
    use HasFactory;

    protected $table = 'cuans';

    protected $fillable = [
        'pengirim',
        'kabupaten_kota',
        'alamat',
        'foto_bukti',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'pengirim', 'username');
    }
}
