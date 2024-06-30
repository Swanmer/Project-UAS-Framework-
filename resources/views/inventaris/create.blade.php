@extends('layouts.main',['title'=>'Inventaris'])
@section('content')
<x-content :title="[
    'name'=>'Inventaris',
    'icon'=>'fas fa-desktop'
]">
    <div class="row">
        <div class="col-md-6">
            <form class="card card-primary" method="POST" action="{{ route('inventaris.store') }}" enctype="multipart/form-data">
                <div class="card-header">
                    <h3 class="card-title">Add Inventaris</h3>
                </div>
                <div class="card-body">
                    @csrf 
                    <x-input label="Kode Inventaris" name="kode_inventaris" />

                    <x-input label="Nama Inventaris" name="nama_inventaris" />

                    <x-select label="Jenis" name="jenis_id" :data-option="$jenis" />

                    <x-select label="Ruang" name="ruang_id" :data-option="$ruang" />

                    <x-input label="Jumlah" name="jumlah" />

                    <x-input label="Kondisi" name="kondisi" />

                    <x-input label="Tanggal Register" name="tanggal_register" type="date" />

                    <x-textarea label="Keterangan" name="keterangan" />

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                </div>
                <div class="card-footer">
                    <x-btn-submit />
                </div>
            </form>
        </div>
    </div>
</x-content>
@endsection
