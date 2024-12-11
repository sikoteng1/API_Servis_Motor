@extends('layouts.mazer-be')
 @section('title', 'Daftar Jasa')
 @section('content')

 <div class="container con-admin">

    <form action="cetak-jasa"  style="text-align: right; ">

        <a href="/cetak-jasa" type="button" target="_blank" style="background: lightgreen; border: #000"
            ><i class="fa-solid fa-print m-2" style="color: #000000;"></i></a>
    </form>
<section>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Nama Jasa</th>
                <th>Foto Jasa</th>
                <th>Deskripsi Jasa</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($jasa as $jasa)
            <tr>
                <td>{{$jasa->nama_jasa}}</td>

                <td><img src="{{ asset('storage/storage/fotojasa/'.$jasa->foto_jasa)}}" width="100"></td>

                <td>{{$jasa->deskripsi_jasa}}</td>

                <td>


                <form action="/jasa/delete/{{$jasa->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit class="btn btn-danger"><i class="fa-solid fa-trash m-2 "></i></button>
                </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('tambah')}}" class="btn btn-primary">Tambah Jasa</a>
    <br>
</section>
</div>


@endsection
