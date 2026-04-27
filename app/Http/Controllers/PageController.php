<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $nama = $request->input('nama');
        session(['nama' => $nama]);
        $nim = $request->input('nim');
        session(['nim' => $nim]);

        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $data = [
            'nama' => session('nama', 'Mahasiswa'),
            'hari_ini' => $this->getHariIni()
        ];
        return view('dashboard', $data);
    }

    public function profile()
    {
        $data = [
            'nama' => session('nama', 'Mahasiswa'),
            'nim' => session('nim', 'Belum diisi'),
            'prodi' => 'Sistem Informasi',
            'fakultas' => 'Ilmu Komputer'
        ];
        return view('profile', $data);
    }

    public function pengelolaan()
    {
        $jadwal = [
            [
                'kode' => 'SI01',
                'mk' => 'Pemrograman Web',
                'hari' => 'Senin',
                'jam' => '08:00 - 10:30',
                'ruang' => 'Lab 301',
                'dosen' => 'Dr. Budi Santoso, S.KOM., M.KOM'
            ],
            [
                'kode' => 'SI02',
                'mk' => 'Basis Data',
                'hari' => 'Selasa',
                'jam' => '10:00 - 12:30',
                'ruang' => 'Lab 302',
                'dosen' => 'Siti Aminah, S.KOM., M.KOM'
            ],
            [
                'kode' => 'SI03',
                'mk' => 'Pengembangan Perangkat Lunak',
                'hari' => 'Rabu',
                'jam' => '13:00 - 15:30',
                'ruang' => 'Lab 303',
                'dosen' => 'Prof. Dr. Ahmad Habibi, S.KOM., M.KOM'
            ],
            [
                'kode' => 'SI04',
                'mk' => 'Manajemen Proyek TI',
                'hari' => 'Kamis',
                'jam' => '08:00 - 10:30',
                'ruang' => 'R. 201',
                'dosen' => 'Dr. Dewi Lestari'
            ],
            [
                'kode' => 'SI05',
                'mk' => 'Profesional Issue',
                'hari' => 'Jumat',
                'jam' => '10:00 - 12:30',
                'ruang' => 'Lab 304',
                'dosen' => 'Herman Wicaksono, S.KOM., M.KOM'
            ]
        ];

        $data = [
            'nama' => session('nama', 'Mahasiswa'),
            'jadwal' => $jadwal,
            'total_mk' => count($jadwal)
        ];

        return view('pengelolaan', $data);
    }

    private function getHariIni()
    {
        $hari = date('l');
        $hariIndonesia = [
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu',
            'Sunday' => 'Minggu'
        ];
        return $hariIndonesia[$hari] ?? $hari;
    }
}
