@extends('layouts.mazer-be')
 @section('title', 'Daftar Pemesanan')
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
                <th>Username</th>
                <th>Nama Pemesan</th>
                <th>Nomor Telpon</th>
                <th>Alamat</th>
                <th>Catatan Konsumen</th>
                <th>Tanggal Dipesan</th>
                <th>Tanggal Kedatangan</th>
                <th>Servis</th>
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>

        <tbody>
            @foreach($checkout as $checkout)
            <tr>
                <td>{{$checkout->user->name}}</td>
                <td>{{$checkout->nama_pemesan}}</td>
                <td>{{$checkout->nomor_telepon}}</td>
                <td>{{$checkout->alamat}}</td>
                <td>{{$checkout->catatan_konsumen}}</td>
                <td>{{$checkout->created_at}}</td>
                <td>{{$checkout->tanggal_kedatangan}}</td>
                <td>{{$checkout->jasa->nama_jasa}}</td>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</section>
</div>


@endsection
