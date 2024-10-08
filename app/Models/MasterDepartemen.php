<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDepartemen extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari default pluralization (contoh: master_departemens)
    protected $table = 'master_departemen';

    // Kolom yang bisa diisi (fillable) melalui mass assignment
    protected $fillable = ['nama_departemen'];
    protected $primaryKey = 'id_departemen';

    public function tasklists()
    {
        return $this->hasMany(Tasklist::class, 'id_departemen', 'id_departemen');
    }
}
