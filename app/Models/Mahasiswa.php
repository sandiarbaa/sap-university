<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Mahasiswa extends Model
{
    use HasFactory;

    public function scopeMahasiswa($query, array $filters) {
        // if(request('cari')) {
        //     return $query->where('nama', 'like', '%' . request('cari') . '%')->orWhere('nim', 'like', '%' . request('cari') . '%');
        // }

        // if(isset($filters['cari']) ? $filters['cari'] : false ) {
        //     return $query->where('nama', 'like', '%' . $filters['cari'] . '%')->orWhere('nim', 'like', '%' . $filters['cari'] . '%');
        // }

        $query->when($filters['cari'] ?? false, function($query ,$cari) {
            return $query->where('nama', 'like', '%' . $cari . '%')
                    ->orWhere('nim', 'like', '%' . $cari . '%');
        });
    }
}
