<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;
    protected $table = 'jasas';
    protected $fillable = ['nama_jasa','deskripsi_jasa'];

    public function checkout()
    {
        return $this->belongsTo(Pemesanan::class);
    }
}
