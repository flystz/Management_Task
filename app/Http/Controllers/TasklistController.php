<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasklist;

class TasklistController extends Controller
{
    public function showTasklist($id)
    {
        // Ambil tasklist berdasarkan id_departemen
        $tasklists = Tasklist::where('id_departemen', $id)->get();

        // Kirim data tasklist ke view
        return view('tasklist.index', compact('tasklists'));
    }
}
