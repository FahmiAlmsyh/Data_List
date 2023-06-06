<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kelas',
        'sekolah',
    ];

    public function scopeSiwa ($query) {
        return $query;
    }

    public function scopeSelectById($query, $id){
        return $query->where('id', $id);
    }
}
