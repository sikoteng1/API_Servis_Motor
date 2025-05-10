@extends('layouts.mazer-be')
@section('title', 'Tambah Jasa')
@section('content')

<div class="container tambah-jasa">
    <h1>Tambah Jasa</h1>

    @if(session('success'))
            <div> {{session('success')}} </div>
        @endif

    <form action="{{ route('jasa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_jasa">Nama Jasa</label>
                <select name="nama_jasa" id="nama_jasa" required>
                    <option value="" disabled selected>Pilih Nama jasa</option>
                    <option>Servis Matic</option>
                    <option>Servis Bebek</option>
                    <option>Servis Kopling</option>
                </select>
                {{-- <input type="text" class="form-control" id="nama" name="nama"> --}}
            </div>

            <div class="form-group">
                <label>Deskripsi Jasa</label>
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="10"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

