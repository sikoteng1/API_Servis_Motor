<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!----------------------------------------------------- Bootstrap CSS ----------------------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!----------------------------------------------------- Fonts ----------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!----------------------------------------------------- Bootstrap Icons ----------------------------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!----------------------------------------------------- Font Awesome ----------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!----------------------------------------------------- Script JS ----------------------------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- CSS -->
    <style>

    body {
        font-family: "Parkinsans", sans-serif;
}
/*
@media (min-width: 666px) {
     .col {
         flex-direction: row;
         display: block
        }
    }    */

.btn {
    border-radius: 100px;
    font-weight: bold;
}

.btn-light:hover {
    color: blue;
}

    </style>

    <title>Jasa</title>

  </head>

  <body>
  <!-- Navbar -->

 @include('includes.nav-user')

  <!-- jasa / Jasa -->

    <section class=" w-full" >

      <h2 class="fw-bold text-center" style="padding-top: 70px">Pilih Jasa Yang Ingin Dipesan</h2>

      <div class="container">
        <div class="row justify-content-center h-15 p-5">
            @foreach($jasa as $jasa)
            <div class="card shadow bg-primary text-white mx-3 mt-5 col-md-3 col-12 mb-4 " style="border-radius: 20px; border: none; box-shadow: 2px 4px 6px rgba(0,0,0,0.15);">
                <img class="card-img-top bg-primary m-auto pt-3" style="border-width: 20px; border-radius: 20px 20px 0px 0px;" src="{{ asset('storage/storage/fotojasa/'.$jasa->foto_jasa)}}" alt="{{$jasa->foto_jasa}}">
                <div class="card-body">
                    <h5 class="card-title text-white fw-bold text-center">{{$jasa->nama_jasa}}</h5>
                    <p class="card-text text-white text-center">{{$jasa->deskripsi_jasa}}</p>
                    <br>
                    @if(auth()->check())
                    <a class="btn fw-bold btn-light d-block mx-auto" style="border-radius: 100px;" href="{{ route('checkout')}}">Pesan Sekarang</a>
                    @else
                    <a class="btn fw-bold btn-light d-block mx-auto" style="border-radius: 100px;" href="{{ route('login') }}">Login</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>

        <div id="copyright">
          <div class="wrapper">
            &copy; 2024. <b>SikoVis</b> All Rights Reserved.
          </div>
        </div>



    </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
