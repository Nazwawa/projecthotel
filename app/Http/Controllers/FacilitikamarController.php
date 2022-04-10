<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class FacilitikamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::latest()->paginate(20);
        return view('facilitiKamar.index', compact('kamars'));
    }
}
