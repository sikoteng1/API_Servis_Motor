<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('servis/checkout.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


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
          <?php echo $date = date('d-m-y H:i:s'); ?>
        </p>
      </div>

      {{-- <div class="form">
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
          <input type="number" class="input" id="telefon_pemesan" name="telefon_pemesan" placeholder="Nomor Telepon" >
        </div>

        <div class="inputfield">
          <label>Alamat</label>
          <input type="text" class="input" id="alamat_pemesan" name="alamat_pemesan" placeholder="Ketik nama Kota Atau Kabupatennya aja"></input>
        </div>


        <div class="inputfield">
          <label for="servis">Servis</label>
          <select name="servis" id="servis" class="input" style="width: 100%">
            @foreach ($jasas as $jasas)
                <option  value="{{$jasas->id }}">{{ $jasas->nama_jasa }}</option>
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
  </div> --}}

  <div class="form"> {{-- Grouping form (Player punya dua div class="form", ini Kina gabung jadi satu form saja) --}}

    <div class="inputfield">
        <label>Nama Akun</label>
        <input type="text" class="input" value="{{ auth()->user()->name }}" readonly>
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
    </div>

    <div class="inputfield">
        <label>Nama Pemesan</label>
        {{-- Tambahkan class 'is-invalid' jika ada error, dan old() untuk nilai sebelumnya --}}
        <input type="text" class="input @error('nama_pemesan') is-invalid @enderror" name="nama_pemesan" id="nama_pemesan" value="{{ old('nama_pemesan') }}" placeholder="Isi Nama Lengkap">
        {{-- Tampilkan pesan error spesifik untuk field ini --}}
        @error('nama_pemesan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="inputfield">
        <label>Nomor Telepon</label>
         {{-- Tambahkan class 'is-invalid' jika ada error, dan old() --}}
        <input type="number" class="input @error('telefon_pemesan') is-invalid @enderror" id="telefon_pemesan" name="telefon_pemesan" placeholder="Nomor Telepon" value="{{ old('telefon_pemesan') }}">
         {{-- Tampilkan pesan error spesifik untuk field ini --}}
        @error('telefon_pemesan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="inputfield">
        <label>Alamat</label>
         {{-- Tambahkan class 'is-invalid' jika ada error, dan old() --}}
         {{-- Kina perbaiki tag inputnya, type="text" tidak perlu tag penutup </input>, kalau mau multiline pakai textarea --}}
        <input type="text" class="input @error('alamat_pemesan') is-invalid @enderror" id="alamat_pemesan" name="alamat_pemesan" placeholder="Ketik nama Kota Atau Kabupatennya aja" value="{{ old('alamat_pemesan') }}">
         {{-- Tampilkan pesan error spesifik untuk field ini --}}
        @error('alamat_pemesan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="inputfield">
        <label for="servis">Servis</label>
         {{-- Tambahkan class 'is-invalid' jika ada error, dan old() untuk select --}}
        <select name="servis" id="servis" class="input @error('servis') is-invalid @enderror" style="width: 100%">
             <option value="" disabled selected>Pilih Servis</option> {{-- Tambahkan opsi default --}}
            @foreach ($jasas as $jasa_item) {{-- Ganti nama variabel biar tidak konflik dengan $jasas di compact() --}}
                <option value="{{ $jasa_item->id }}" {{ old('servis') == $jasa_item->id ? 'selected' : '' }}> {{-- Gunakan old() untuk select --}}
                    {{ $jasa_item->nama_jasa }}
                </option>
            @endforeach
        </select>
         {{-- Tampilkan pesan error spesifik untuk field ini --}}
        @error('servis')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="inputfield">
        <label>Catatan Konsumen</label>
         {{-- Tambahkan class 'is-invalid' jika ada error, dan old() untuk textarea --}}
        <textarea class="textarea input @error('catatan_konsumen') is-invalid @enderror" id="catatan_konsumen" name="catatan_konsumen" placeholder="Silahkan diisi atau dibiarkan kosong">{{ old('catatan_konsumen') }}</textarea>
         {{-- Tampilkan pesan error spesifik untuk field ini --}}
        @error('catatan_konsumen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="inputfield">
        <label>Tanggal Kedatangan</label>
         {{-- Tambahkan class 'is-invalid' jika ada error, dan old() --}}
        <input type="date" class="input @error('tanggal_kedatangan') is-invalid @enderror" name="tanggal_kedatangan" id="tanggal_kedatangan" value="{{ old('tanggal_kedatangan') }}">
         {{-- Tampilkan pesan error spesifik untuk field ini --}}
        @error('tanggal_kedatangan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="inputfield terms">
         {{-- Tambahkan class 'is-invalid' jika ada error, dan old() --}}
        <label class="check">
            <input type="checkbox" name="checkbox" id="checkbox" value="1" {{ old('checkbox') ? 'checked' : '' }}> {{-- checkbox perlu value dan old() --}}
            <span class="checkmark"></span>
        </label>
        <p>Harga yg tertera adalah Harga Estimasi, bisa berubah tergantung kondisi motor</p>
         {{-- Tampilkan pesan error spesifik untuk checkbox --}}
         @error('checkbox')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="inputfield">
        <button type="submit" name="pesan" class="btn btn-primary">Pesan Jasa</button>
    </div>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
