@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="max-w-md mx-auto bg-pink-100 rounded-lg shadow-md p-8 mt-10">
    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-pink-600">🔒Login🔓</h1>
        <p class="text-gray-600 mt-2">Masuk ke Sistem Jadwal Kuliah - JADWALIN</p>
    </div>

    <form action="{{ route('proses.login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Mahasiswa</label>
            <input type="text"
                   name="nama"
                   id="nama"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   placeholder="Masukkan nama lengkap..."
                   required>
        </div>
        <div class="mb-4">
            <label for="im" class="block text-gray-700 font-medium mb-2">NIM</label>
            <input type="text"
                   name="nim"
                   id="nim"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   placeholder="Masukkan nim anda..."
                   required>
        </div>

        <button type="submit"
                class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 transition">
            Masuk
        </button>
    </form>
</div>
@endsection
