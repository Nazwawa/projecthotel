<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;

class UfasilitasController extends Controller
{
    public function index(){
        $facilities = Facility::latest()->paginate(20);
        return view('ufasilitas.index', compact('facilities'));
    }
}
