<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Tasklist;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Method untuk menampilkan tasks berdasarkan tasklist_id
    public function showTasks($id)
    {
        // Ambil tasklist berdasarkan id yang diberikan
        $tasklist = Tasklist::findOrFail($id);

        // Ambil semua tasks yang berhubungan dengan tasklist ini
        $tasks = Task::where('tasklist_id', $id)->get();

        // Kembalikan view dengan data tasks
        return view('tasks.index', compact('tasks', 'tasklist'));
    }
}
