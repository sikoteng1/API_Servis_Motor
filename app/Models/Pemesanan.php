<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanans';
    protected $fillable = [
        'user_id',
        // 'tanggal_pemesanan',
        'nama_pemesan',
        'telefon_pemesan',
        'alamat_pemesan',
        'jasa_id',
        'catatan_konsumen',
        'tanggal_kedatangan',
    ];
    protected $guarded = ['id'];

    public function jasa()
    {
        return $this->belongsTo(Jasa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
