@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-pink-100 rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold text-gray-800">📊 Dashboard</h1>

    <div class="mt-4 p-4 bg-pink-50 border-l-4 border-pink-500 rounded">
        <p class="text-pink-800">
            <span class="font-bold">Selamat datang, {{ $nama }}!</span>
        </p>
        <p class="text-pink-700 mt-1">
            Hari ini: <span class="font-semibold">{{ $hari_ini }}</span>
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-linear-to-r from-pink-500 to-pink-600">
            <div class="text-3xl font-bold">5</div>
            <div class="text-sm mt-2">Mata Kuliah</div>
        </div>
        <div class="bg-linear-to-r from-pink-500 to-pink-600">
            <div class="text-3xl font-bold">5 Hari</div>
            <div class="text-sm mt-2">Hari Aktif</div>
        </div>
    </div>

    <div class="mt-8 text-center text-gray-500 text-sm">
        <p>Klik menu <span class="font-semibold">"Jadwal"</span> untuk melihat daftar mata kuliah</p>
    </div>
</div>
@endsection
