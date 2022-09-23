<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pelanggaran;

class PelanggaranSiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_uuid',
        'nama'
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
    // public function pelanggaran()
    // {
    //     return $this->hasMany(Pelanggaran::class);
    // }
}
