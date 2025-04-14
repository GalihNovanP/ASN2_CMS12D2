<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawans.index', compact('karyawans'));
    }

    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawans.show', compact('karyawan'));
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawans.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());
        return redirect('/karyawans')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawans.delete', compact('karyawan'));
    }
    
    public function destroy($id)
{
    $karyawan = Karyawan::findOrFail($id);
    $karyawan->delete();
    return redirect('/karyawans')->with('success', 'Karyawan berhasil dihapus');
}

}