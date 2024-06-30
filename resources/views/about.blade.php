<!-- resources/views/about.blade.php -->
@extends('layouts.main', ['title' => 'About'])

@section('content')
<x-content :title="[
    'name' => 'About',
    'icon' => 'fas fa-info-circle'
]">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/UTS.png') }}" alt="About Image" class="img-fluid mb-4">
        </div>
        <div class="col-md-6">
            <h3 class="mb-3">Deskripsi Aplikasi</h3>
            <p class="mb-4">
                Aplikasi ini adalah solusi terbaik untuk manajemen inventaris prodi informatika. Dengan fitur-fitur canggih
                dan antarmuka yang intuitif, kami memudahkan Anda dalam mengelola inventaris prodi informatika dengan efisien<br>
                
            </p>
            <!-- <h3 class="mb-3">Anggota Kelompok</h3>
            <ul>k
                <li>Amir Adzadzakir Kasmadi</li>
                <li>Rahmawati</li>
                <li>Arsy Andryani Safitri</li>
                <li>Vira Saleha</li>
                <li>Rezha Fathurrahman</li> -->
            </ul>
        </div>
    </div>
</x-content>
@endsection
