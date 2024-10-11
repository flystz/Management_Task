<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'tasklist_id',
        'nama_task',
        'menugaskan',
        'deskripsi',
        'end_date',
        'status',
    ];

    protected $table = 'tasks';

    public function tasklist()
    {
        return $this->belongsTo(Tasklist::class, 'tasklist_id');
    }
}

