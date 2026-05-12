@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<h1 class="text-3xl font-bold mb-5">
    Dashboard
</h1>

<div class="grid grid-cols-4 gap-5">

    <div class="bg-white p-5 rounded shadow">
        <h2>Total Siswa</h2>
        <p class="text-2xl font-bold">
            {{ $totalSiswa }}
        </p>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <h2>Total Kelas</h2>
        <p class="text-2xl font-bold">
            {{ $totalKelas }}
        </p>
    </div>

</div>

@endsection