@extends('layouts.app')

@section('title', 'Profile Mahasiswa')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-linear-to-r from-pink-500 to-pink-600 px-6 py-8">
        <div class="text-center">
            <div class="inline-block bg-pink-50 rounded-full p-3 mb-4">
                <svg class="w-16 h-16 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-white">Profil Mahasiswa</h1>
        </div>
    </div>

    <div class="p-6">
        <div class="space-y-4">
            <div class="border-b pb-3">
                <label class="text-gray-500 text-sm">Nama Lengkap</label>
                <p class="text-gray-800 font-medium text-lg">{{ $nama }}</p>
            </div>
            <div class="border-b pb-3">
                <label class="text-gray-500 text-sm">NIM</label>
                <p class="text-gray-800 font-medium text-lg">{{ $nim }}</p>
            </div>
            <div class="border-b pb-3">
                <label class="text-gray-500 text-sm">Program Studi</label>
                <p class="text-gray-800 font-medium text-lg">{{ $prodi }}</p>
            </div>
            <div class="border-b pb-3">
                <label class="text-gray-500 text-sm">Fakultas</label>
                <p class="text-gray-800 font-medium text-lg">{{ $fakultas }}</p>
            </div>
            <div class="pt-2">
                <label class="text-gray-500 text-sm">Status</label>
                <p class="mt-1">
                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Aktif</span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
