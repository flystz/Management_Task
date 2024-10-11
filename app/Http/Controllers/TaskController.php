<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Tasklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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


        return view('tasks.create', compact('tasklist'));
    }

    public function store(Request $request)
    {

        if (Auth::user()->usertype == 'admin') {
            // Validasi input
            $request->validate([
                'nama_task' => 'required|string|max:255',
                'menugaskan' => 'required|string|max:255',
                'deskripsi' => 'nullable|string',
                'end_date' => 'required|date',
                'status' => 'required|string|in:todo,on_progress,complete', // pastikan status valid
            ]);



            // Buat task baru
            Task::create([
                'nama_task' => $request->nama_task,
                'menugaskan' => $request->menugaskan,
                'deskripsi' => $request->deskripsi,
                'end_date' => $request->end_date,
                'status' => $request->status,
                'tasklist_id' => $request->tasklist_id,
                // 'tasklist_id' => $request->tasklist_id, // pastikan ini sesuai dengan relasi yang Anda buat
                'created_by' => Auth::id(), // jika Anda ingin menyimpan ID user yang membuat task
            ]);



            return redirect()->route('tasks.show', $request->tasklist_id)
                ->with('success', 'Task berhasil ditambahkan!');
        } else {
            return redirect()->route('tasks.show', $request->tasklist_id)
                ->with('error', 'Anda tidak memiliki akses untuk menambahkan task!');
        }
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

    public function destroy($id)
    {
        // Ambil task berdasarkan id yang diberikan
        $task = Task::findOrFail($id);



        // Cek apakah pengguna yang sedang login adalah admin
        if (Auth::user()->usertype == 'admin') {
            // Hapus task
            $task->delete();

            // Redirect kembali ke halaman tasks dengan pesan sukses
            return back()->with('success', 'Task berhasil dihapus!');
        } else {
            // Jika bukan admin, kembalikan pesan error
            return back()->with('error', 'Anda tidak memiliki akses untuk menghapus task ini!');
        }
    }

    public function showuser($userId)
    {

      
        // Temukan user berdasarkan ID
        $user = User::find($userId);
        if ($user) {
            // Tampilkan informasi user
            session()->flash('info', "User: $user->name, Email: $user->email, Usertype: $user->usertype");
        }

        return redirect()->to('/manage-users');
    }
}
