<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Beasiswa::all();
        $no = 1;
        return view('beasiswa.hasil', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $jenis_beasiswa = $request->input('jenis_beasiswa');
        $ipk = 3.5;
        return view('beasiswa.pendaftaran', compact('jenis_beasiswa', 'ipk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:beasiswas',
            'nomor_hp' => 'required|string|regex:/^[0-9]{10,13}$/',
            'semester' => 'required|string|max:1',
            'ipk' => 'required|numeric|between:0,4.00',
            'jenis_beasiswa' => 'required|string|max:50',
            'file' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $beasiswa = new Beasiswa();
        $beasiswa->nama = $request['nama'];
        $beasiswa->email = $request['email'];
        $beasiswa->nomor_hp = $request['nomor_hp'];
        $beasiswa->semester = $request['semester'];
        $beasiswa->ipk = $request['ipk'];
        $beasiswa->jenis_beasiswa = $request['jenis_beasiswa'];
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $beasiswa->file = $filePath;
        }

        try {
            $beasiswa->save();
            return redirect()->route('hasil')->with('success', 'Data saved successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Beasiswa $beasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beasiswa $beasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beasiswa $beasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beasiswa $beasiswa)
    {
        //
    }
}
