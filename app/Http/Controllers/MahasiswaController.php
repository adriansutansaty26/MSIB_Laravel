<?php

namespace App\Http\Controllers;

use App\Models\User;

class MahasiswaController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function nilaiMahasiswa()
    {
        $no = 1;
        $s1 = ['nama' => 'Fawwaz', 'nilai' => 85];
        $s2 = ['nama' => 'Bedu', 'nilai' => 58];
        $s3 = ['nama' => 'Siti', 'nilai' => 95];
        $s4 = ['nama' => 'Deden', 'nilai' => 30];
        $siswa = [$s1, $s2, $s3, $s4];
        $judulKolom = ["No", "Nama", "Nilai", "Keterangan"];
        return view('nilai_mahasiswa', ['no' => $no, 'judulKolom' => $judulKolom, 'siswa' => $siswa]);
    }
}
