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

public function create()
{
    return view('karyawans.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'email' => 'required|email|unique:karyawans,email',
    ]);

    Karyawan::create($request->all());
    return redirect()->route('karyawans.index')->with('success', 'Karyawan berhasil ditambahkan!');
}

public function edit($id)
{
    $karyawan = Karyawan::findOrFail($id);
    return view('karyawans.edit', compact('karyawan'));
}

public function update(Request $request, $id)
{
    $karyawan = Karyawan::findOrFail($id);

    $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'email' => 'required|email|unique:karyawans,email,' . $id,
    ]);

    $karyawan->update($request->all());
    return redirect()->route('karyawans.index')->with('success', 'Data karyawan diperbarui.');
}

public function destroy($id)
{
    $karyawan = Karyawan::findOrFail($id);
    $karyawan->delete();
    return redirect()->route('karyawans.index')->with('success', 'Karyawan dihapus.');
}


}

