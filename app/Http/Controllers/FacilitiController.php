<?php

namespace App\Http\Controllers;

use App\Models\Faciliti;
use Illuminate\Http\Request;

class FacilitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Faciliti::latest()->paginate(20);
        return view('facilities.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'keterangan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Faciliti::create($input);
        return redirect()->route('facilities.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faciliti  $faciliti
     * @return \Illuminate\Http\Response
     */
    public function show(Faciliti $faciliti)
    {
        return view('facilities.show', compact('faciliti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faciliti  $faciliti
     * @return \Illuminate\Http\Response
     */
    public function edit(Faciliti $facility)
    {
        return view('facilities.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faciliti  $faciliti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'keterangan' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $faciliti->update($input);
        return redirect()->route('facilities.index')
            ->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faciliti  $faciliti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faciliti $faciliti)
    {
        $faciliti->delete();
        return redirect()->route('facilities.index')
            ->with('success', 'Data berhasil di hapus');
    }
}
