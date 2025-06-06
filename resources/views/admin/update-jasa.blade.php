@extends('layouts.mazer-be')
@section('title', 'Update Jasa')
@section('content')

{{-- <div class="container tambah-jasa"> --}}
    <h1>Update Jasa</h1>

    @if(session('success'))
            <div> {{session('success')}} </div>
        @endif

    <form action="{{ route('update-jasa', ['id' => $jasas->id]) }}" method="POST">
            @csrf
            @method('get')

            <div class="form-group">
                <label for="nama_jasa">Nama Jasa</label>
                <select name="nama_jasa" id="nama_jasa" required>
                    <option value="" disabled selected>Pilih Nama Jasa</option>
                    <option>Servis Matic</option>
                    <option>Servis Bebek</option>
                    <option>Servis Kopling</option>
                </select>
                {{-- <input type="text" class="form-control" id="nama" name="nama"> --}}
            </div>

            <div class="form-group">
                <label>Deskripsi Jasa</label>
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="10" value={{Jasa::deskripsi_jasa}}></textarea>
            </div>

            <div class="form-group">
                <label>Foto Jasa</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>


            <button type="submit" class="btn btn-primary">simpan</button>
        </form>
    {{-- </div> --}}
@endsection
