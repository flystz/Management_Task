<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterDepartemen;

class MasterDepartemenController extends Controller
{

    public function show()
    {
        $departemen = MasterDepartemen::all();
        // Kirim data ke view
        return view('components.sidebar', compact('departemen'));
    }
}
