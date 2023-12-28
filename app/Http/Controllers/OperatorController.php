<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    public function index()
    {
        // Mengambil semua data operator
        $operators = Operator::all();
        
        // Mengirim data operator ke view 'operators.index' untuk ditampilkan
        return view('operators.index', compact('operators'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat operator baru
        return view('operators.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diinputkan pengguna pada form pembuatan operator
        $validatedData = $request->validate([
            'nama' => 'required|max:255', // Nama harus diisi dan maksimal 255 karakter
            'password' => 'required|min:6', // Password harus diisi dan minimal 6 karakter
            'email' => 'required|email|unique:operators,email', // Email harus diisi, format email dan unik di tabel operators
            'role' => 'required|max:255', // Role harus diisi dan maksimal 255 karakter
        ]);

        // Mengenkripsi password sebelum disimpan ke database
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Menyimpan operator baru ke dalam database
        Operator::create($validatedData);

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('operators.index')->with('success', 'Operator berhasil dibuat.');
    }

    public function show(Operator $operator)
    {
        // Menampilkan halaman detail untuk operator tertentu
        return view('operators.show', compact('operator'));
    }

    public function edit(Operator $operator)
    {
        // Menampilkan form untuk mengedit data operator tertentu
        return view('operators.edit', compact('operator'));
    }

    public function update(Request $request, Operator $operator)
    {
        // Validasi data yang diinputkan pengguna pada form pengeditan operator
        $validatedData = $request->validate([
            'nama' => 'required|max:255', // Nama harus diisi dan maksimal 255 karakter
            'password' => 'sometimes|min:6', // Password boleh kosong, jika diisi minimal 6 karakter
            'email' => 'required|email|unique:operators,email,'.$operator->id, // Email harus diisi, format email dan unik di tabel operators kecuali untuk operator yang sedang diupdate
            'role' => 'required|max:255', // Role harus diisi dan maksimal 255 karakter
        ]);

        // Jika password diisi, enkripsi password baru sebelum disimpan ke database
        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            // Jika password tidak diisi, hapus dari array validasi sehingga password lama tetap dipertahankan
            unset($validatedData['password']);
        }

        // Memperbarui data operator dalam database
        $operator->update($validatedData);

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('operators.index')->with('success', 'Operator berhasil diperbarui.');
    }

    public function destroy(Operator $operator)
    {
        // Menghapus data operator dari database
        $operator->delete();

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('operators.index')->with('success', 'Operator berhasil dihapus.');
    }
}
