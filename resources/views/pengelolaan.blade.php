@extends('layouts.app')

@section('title', 'Jadwal Mata Kuliah')

@section('content')
<div class="bg-pink-50 rounded-lg shadow-md overflow-hidden">
    <div class="px-6 py-4 bg-pink-100 border-b">
        <h1 class="text-xl font-bold text-pink-800">📅 Jadwal Mata Kuliah</h1>
        <p class="text-gray-600 mt-1">Berikut jadwal kuliah Anda</p>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kode</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Kuliah</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hari</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jam</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ruang</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Dosen</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($jadwal as $row)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-sm text-gray-900">{{ $row['kode'] }}</td>
                    <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $row['mk'] }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600">{{ $row['hari'] }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600">{{ $row['jam'] }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600">{{ $row['ruang'] }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600">{{ $row['dosen'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="px-6 py-3 bg-gray-50 border-t text-sm text-gray-600">
        📊 Total Mata Kuliah: {{ count($jadwal) }} mata kuliah
    </div>
</div>
@endsection
