<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('servis/checkout.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Document</title>
</html>
  <title>Checkout</title>
</head>

<body>

  <!-- Awal Navbar -->
    @include('includes.nav-user')
  <!-- Akhir Navbar -->

<br>
<br>
<div class="wrapper-nota">
    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf
      <div class="title">
        <p>Tanggal Pemesanan :
          <?php echo $date = date('d-m-y'); ?>
        </p>
      </div>

      <div class="form">
        <div class="inputfield">
          <label>Nama Akun</label>
          <input type="text" class="input" name="nama" value="{{ auth()->user()->name }}" readonly>
        </div>

      <div class="form">
        <div class="inputfield">
          <label>Nama Pemesan</label>
          <input type="text" class="input" name="nama_pemesan" id="nama_pemesan" value="" placeholder="Isi Nama Lengkap">
        </div>

        <div class="inputfield">
          <label>Nomor Telepon</label>
          <input type="number" class="input" id="nomor_telepon" name="nomor_telepon" placeholder="Nomor Telepon" >
        </div>

        <div class="inputfield">
          <label>Alamat</label>
          <input type="text" class="input" id="alamat" name="alamat" placeholder="Ketik nama Kota Atau Kabupatennya aja"></input>
        </div>


        <div class="inputfield">
          <label for="servis">Servis</label>
          <select name="servis" id="servis" class="input" style="width: 100%">
            @foreach ($jasa as $jasa)
                <option  value="{{$jasa->id }}">{{ $jasa->nama_jasa }}</option>
            @endforeach
          </select>
        </div>

        <div class="inputfield">
          <label>Catatan Konsumen</label>
          <textarea class="textarea" class="input" id="catatan_konsumen" name="catatan_konsumen"></textarea>
        </div>

        <div class="inputfield">
          <label>Tanggal Kedatangan</label>
          <input type="date" class="input" name="tanggal_kedatangan" id="tanggal_kedatangan">
        </div>

        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" name="checkbox" id="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Harga yg tertera adalah Harga Estimasi, bisa berubah tergantung kondisi motor</p>
        </div>

        <div class="inputfield">
          <button type="submit" name="pesan" class="btn btn-primary">Pesan Jasa</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
