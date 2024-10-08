<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasklist extends Model
{
    use HasFactory;

    protected $table = 'tasklist';

    public function departemen()
    {
        return $this->belongsTo(MasterDepartemen::class, 'id_departemen');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'tasklist_id');
    }
}
