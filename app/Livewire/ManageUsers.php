<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $users = [];
    public $usertype = [];

    public function mount()
    {
        // Ambil semua user dari database dan inisialisasi usertype mereka
        $this->users = User::all();
        foreach ($this->users as $user) {
            $this->usertype[$user->id] = $user->usertype;
        }
    }

    public function updateUsertype($userId)
    {
        // Validasi usertype yang baru
        $this->validate([
            "usertype.$userId" => 'required|in:user,admin',
        ]);

        // Temukan user berdasarkan ID dan update tipe user-nya
        $user = User::find($userId);
        if ($user) {
            $user->usertype = $this->usertype[$userId];
            $user->save();
            session()->flash('success', 'Usertype berhasil diperbarui!');
        }
    }

    public function render()
    {
        return view('livewire.manage-users');
    }
}
