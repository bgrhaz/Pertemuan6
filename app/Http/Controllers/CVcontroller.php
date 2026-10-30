<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cvModel;

class CVcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('CV.formCV');
    }

    public function halamanCV(){
        return view('CV.halamanCV');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $data['nama'] = $request->input('nama');
        $data['tentang_saya'] = $request->input('tentang_saya');
        $data['pendidikan'] = $request->input('pendidikan');
        $data['pengalaman_kerja'] = $request->input('pengalaman_kerja');

        $data['cv_id'] = cvModel::max('cv_id') + 1; 

        cvModel::create($data);
        return view('CV.halamanCV', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cv = cvModel::findOrFail($id);
        return view('CV.edit', compact('cv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cv = cvModel::findOrFail($id);
        $cv->update($request->all());
        return redirect()->route('cv.halamanCV');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cv = cvModel::findOrFail($id);
        $cv->delete();

        return view('CV.formCV')->with('success', 'CV berhasil dihapus.');
    }
}
