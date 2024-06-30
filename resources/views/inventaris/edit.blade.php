@extends('layouts.main', ['title' => 'Edit Inventaris'])

@section('content')
    <x-content :title="['name' => 'Inventaris', 'icon' => 'fas fa-desktop']">
        <div class="row">
            <div class="col-md-6">
                <form class="card card-primary" method="POST" action="{{ route('inventaris.update', ['inventari' => $inventaris->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <h3 class="card-title">Edit Inventaris</h3>
                    </div>

                    <div class="card-body">
                        <x-input label="Kode Inventaris" name="kode_inventaris" :value="$inventaris->kode_inventaris" />

                        <x-input label="Nama Inventaris" name="nama_inventaris" :value="$inventaris->nama_inventaris" />

                        <x-select label="Jenis" name="jenis_id" :value="$inventaris->jenis_id" :data-option="$jenis" />

                        <x-select label="Ruang" name="ruang_id" :value="$inventaris->ruang_id" :data-option="$ruang" />

                        <x-input label="Jumlah" name="jumlah" :value="$inventaris->jumlah" />

                        <x-input label="Kondisi" name="kondisi" :value="$inventaris->kondisi" />

                        <x-input label="Tanggal Register" name="tanggal_register" type="date" :value="$inventaris->tanggal_register" />

                        <x-textarea label="Keterangan" name="keterangan" :value="$inventaris->keterangan" />

                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if ($inventaris->image)
                                <div>
                                    <img src="{{ asset('storage/images/' . $inventaris->image) }}"
                                         alt="Gambar Inventaris" style="max-width: 200px; margin-top: 10px;">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </x-content>
@endsection
