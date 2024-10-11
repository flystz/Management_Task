<?php

namespace App\Livewire\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Logout extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function __invoke(): void
    {
        Auth::guard('web')->logout();

        Session::invalidate();
        Session::regenerateToken();
    }

    public function logout()
    {
        // Tambahkan logika custom di sini
        session()->flash('message', 'You have successfully logged out.');

        Auth::logout();
 
        // return redirect('/');



     
    }

    public function render()
    {
        
        return redirect('/');
    }
}
