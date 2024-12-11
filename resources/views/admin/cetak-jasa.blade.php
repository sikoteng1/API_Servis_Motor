<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        table.static {
            position: relative;
            border: 3px solid #543535;
            width: 95%;
        }

        a {
            border: 3px solid #000000;
        }

        @media print{
            .hide-on-print {
            display: none;
            }
        }

    </style>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Cetak Data Jasa</title>
</head>


<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Jasa</b></p>

    <div class="hide-on-print text-end me-5">
        <a target="_blank" align="center" style="background: lightgreen;"
                onclick=cetakPDF()>Print <i class="fa-solid fa-print m-2" style="color: #000000;"></i>
        </a>
    </div>

        <table class="static table table-bordered" align="center" rules="all">
            <thead>
                <tr>
                    <th>Nama Jasa</th>
                    <th>Foto Jasa</th>
                    <th>Deskripsi Jasa</th>
                </tr>
            </thead>

            <tbody align="center">
                @foreach($jasa as $jasa)
                <tr>
                    <td>{{$jasa->nama_jasa}}</td>

                    <td><img src="{{ asset('storage/storage/fotojasa/'.$jasa->foto_jasa)}}" width="100"></td>

                    <td>{{$jasa->deskripsi_jasa}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function cetakPDF() {
            // Hapus tombol cetak dari tampilan cetak
            var tombolCetak = document.querySelector('.btn-success');
            if (tombolCetak) {
                tombolCetak.style.display = 'none';
            }

            // Cetak halaman
            window.print();

            // Kembalikan tombol cetak setelah selesai mencetak
            if (tombolCetak) {
                tombolCetak.style.display = 'block';
            }
        }
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0e5d92e262.js" crossorigin="anonymous"></script>
</body>
</html>
