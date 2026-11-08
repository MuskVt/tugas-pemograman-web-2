<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('karyawan.index', [
            'title' => 'Karyawan',
            // 'karyawans' =>Karyawan::all(),
            // untuk manampilkan data yang baru diatas
            'karyawans' =>Karyawan::latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // jika tombol create ditekan pada form index akan membawa ke form Create
        return view('karyawan.create', ['title' => 'Create Karyawan']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        // tempat untuk memvalidasi data dari tombol create tadi
        $validated = $request->validate([
            'name' => 'required','max:50',
            'nik' => 'required|digits:6|numeric'
        ],  [

            // pesan pesan pada tabel jika tidak memenuhi persyararan/validasi
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter',
            'nik.required' => 'Nik tidak boleh kosong',
            'nik.digits' => 'Nik wajib :digits digit',
            'nik.numeric' => 'Nik wajib angka',
            ]   
            );
            
            // saat berhasil akan diubah dan dibawa kembali ke index
            Karyawan::create($validated);
            return to_route('karyawan.index')->withSuccess('Data Pekerja Berhasil Ditambahkan');
            
            }
            
            /**
             * Display the specified resource.
            */
            public function show(Karyawan $karyawan)
            {
                //
                }
                
                /**
                 * Show the form for editing the specified resource.
                */
                public function edit(Karyawan $karyawan)
                {
                    return view('karyawan.edit', [
                        'title' => 'Edit Karyawan',
                        'karyawan' =>$karyawan,
                        ]);
                        }
                        
                        /**
                         * Update the specified resource in storage.
                        */
    public function update(Request $request, Karyawan $karyawan)
    {
        // tempat untuk memvalidasi data dari tombol create tadi
        $validated = $request->validate([
            'name' => 'required','max:50',
            'nik' => 'required|digits:6|numeric'
        ],  [

            // pesan pesan pada tabel jika tidak memenuhi persyararan/validasi
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter',
            'nik.required' => 'Nik tidak boleh kosong',
            'nik.digits' => 'Nik wajib :digits digit',
            'nik.numeric' => 'Nik wajib angka',
            ]   
    );

    $karyawan->update($validated);

    // saat berhasil akan diubah dan dibawa kembali ke index
    return to_route('karyawan.index')->withSuccess('Data Pekerja Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete($karyawan);

        // saat berhasil akan diubah dan dibawa kembali ke index
        return to_route('karyawan.index')->withSuccess('Data Pekerja Telah Dihapus');
    }
}
