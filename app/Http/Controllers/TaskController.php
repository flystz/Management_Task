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

        // Ambil tasks yang berhubungan dengan tasklist ini berdasarkan status
        $tasksTodo = Task::where('tasklist_id', $id)
                         ->where('status', 'todo')
                         ->get();
                         
        $tasksOnProgress = Task::where('tasklist_id', $id)
                               ->where('status', 'on_progress')
                               ->get();
                               
        $tasksComplete = Task::where('tasklist_id', $id)
                             ->where('status', 'complete')
                             ->get();

        // Kembalikan view dengan data tasks yang sudah dipisahkan berdasarkan status
        return view('tasks.index', compact('tasksTodo', 'tasksOnProgress', 'tasksComplete', 'tasklist'));
    }

    // Method untuk menampilkan form untuk menambahkan task
    public function createTask($id)
    {
        // Ambil tasklist berdasarkan id yang diberikan
        $tasklist = Tasklist::findOrFail($id);

        // Kembalikan view dengan data tasklist
        return view('tasks.create', compact('tasklist'));
    }

    // Method untuk memindahkan status task
    public function moveTask(Request $request, $id)
    {
        // Ambil task berdasarkan id yang diberikan
        $task = Task::findOrFail($id);

        // Update status task dengan data dari request
        $task->status = $request->status;
        $task->save();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Status task berhasil diperbarui.');
    }
}

