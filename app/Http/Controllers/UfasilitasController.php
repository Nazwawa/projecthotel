<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faciliti;

class UfasilitasController extends Controller
{
    public function index(){
        $facilities = Faciliti::latest()->paginate(20);
        return view('ufasilitas.index', compact('facilities'));
    }
}
