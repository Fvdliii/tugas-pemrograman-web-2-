<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Database\Seeders\PendudukSeeder;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penduduk.index', 
        ['title' => 'Data Penduduk',
        'Penduduks' => Penduduk::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penduduk.create', ['title' => 'Isi/Tambahkan Data']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama' => 'required|max:255',
        'email' => 'required|email|max:255',
        'nohp' => 'required|digits:12|numeric',
        'nik' => 'required|digits:16|numeric',
        'kelamin' => 'required|in:Laki-laki,Perempuan',
        
    ], [
        'nama.required' => 'Nama harus di isi',
        'nama.max' => 'nama tidak boleh lebih dari :max karakter',

        'email.required' => 'Email Harus Di isi',

        'nohp.required' => 'Nomor HP harus di isi',
        'nohp.digits' => 'Nomor Hp tidak boleh lebih dari :digits digit',

        'nik.required' => 'nik HP harus di isi',
        'nik.digits' => 'NIK tidak boleh lebih dari :digits digit',

        'kelamin.required' => 'Jenis Kelamin Anda Harus Di Isi',


    ]);

                Penduduk::create($validated);
                return to_route('Penduduk.index')->withSuccess('Data Berhasil Di Tambahkan');




    // The blog post is valid...

    return redirect('/Penduduk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', 
        ['title' => 'Edit Penduduk',
        'penduduk' => $penduduk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $validated = $request->validate([
        'nama' => 'required|max:255',
        'email' => 'required|email|max:255',
        'nohp' => 'required|digits:12|numeric',
        'nik' => 'required|digits:16|numeric',
        'kelamin' => 'required|in:Laki-laki,Perempuan',
        
    ], [
        'nama.required' => 'Nama harus di isi',
        'nama.max' => 'nama tidak boleh lebih dari :max karakter',

        'email.required' => 'Email Harus Di isi',

        'nohp.required' => 'Nomor HP harus di isi',
        'nohp.digits' => 'Nomor Hp tidak boleh lebih dari :digits digit',

        'nik.required' => 'nik HP harus di isi',
        'nik.digits' => 'NIK tidak boleh lebih dari :digits digit',

        'kelamin.required' => 'Jenis Kelamin Anda Harus Di Isi',


    ]);

                $penduduk->update($validated);
                return to_route('Penduduk.index')->withSuccess('Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penduduk $penduduk)
    {
        //
    }
}
