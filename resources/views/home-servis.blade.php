<!DOCTYPE html>
<html lang="en">
  <head>
    <!----------------------------------------------------- Required meta tags ----------------------------------------------------->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

    <!----------------------------------------------------- My CSS ----------------------------------------------------->
    {{-- <link rel="stylesheet" href="{{ asset('servis/style.css') }}" /> --}}

    <style>
    .jumbotron {
    padding-top: 6rem ;
    background-color: #081a25;
    }

    #projects {
        background-color: #081a25;
    }

    section {
        padding-top: 5rem;
    }

    html,body {
        font-family: "Parkinsans", sans-serif;
        /* overflow-x: hidden; */
    }

    /* @media (max-width: 600px) {
            #order {
                min-width: 100%;
                padding: 1rem
                }
            } */
    </style>

    <title>Sikoteng Servis</title>
  </head>

  <body id="home">
    <!----------------------------------------------------- Awal Navbar ----------------------------------------------------->

    @include('includes.nav-user')

    <!-- Akhir Navbar ---->


    <!----------------------------------------------------- Jumbotron ----------------------------------------------------->
    <section class="jumbotron text-center pb-5">
    <div class="#home">
      <img src="{{ asset('servis/img/home1.jpg')}}" alt="sikoteng1" width="300" class="rounded-circle " />
      <div class="jumbotron-text">
        {{-- @isset($success)
        <div class="bg-success w-100 h-25">{{$success}}</div>
        @endisset --}}

        @if(session('success'))
            <div class="bg-success w-100 h-25"> {{session('success')}} </div>
        @endif
        <h1 class="display-4 text-white">Sikoteng Servis</h1>
        <p class="lead text-white ">Servis Segala Jenis Motor Dari Matic, Bebek Hingga Kopling</p>
      </div>
    </div>

    </section>
    <!-- Akhir Jumbotron ---->

    <!----------------------------------------------------- Awal Jasa ----------------------------------------------------->
    <section id="jasa" class="pb-5">
      <div class="container">
        <div class="row text-center mb-2">
          <div class="col">
            <h1 class="font-bold" style="font-weight: 600; font-size: 50px">JENIS JASA</h1>
            <br>
            <h4 class="deskripsi">Pilih Layanan Yang Anda Inginkan !</h4>
            <h5 style="font-weight: bold;">Sikoteng Servis Menyediakan Layanan Servis Untuk Semua Jenis Motor.</h5>
          </div>
        </div>

        <br>
        <br>

        <div class="container mb-5">
        <div class="row justify-content-center fs-5 text-center">

          <div class="col-md-4" style="width: 17.4rem; border: none;" >
            <img src="{{ asset('servis/img/servismotor.jpg')}}" class="card-img-top w-14 mx-auto mt-3" alt="">
            <p><b>SERVIS MOTOR</b></p>
          </div>
          <div class="col-md-4" style="width: 16rem; border: none;" >
            <img src="{{ asset('servis/img/kondisi.jpg')}}" class="card-img-top w-7 mx-auto mt-1" alt="">
            <br>
            <p><b>CEK KONDISI</b></p>
          </div>
          <div class="col-md-4" style="width: 15.6rem; border: none;" >
            <img src="{{ asset('servis/img/gantioli.jpg')}}" class="card-img-top w-7 mx-auto mt-3" alt="">
            <p><b>PERGANTIAN OLI</b></p>
          </div>
          <div class="col-md-4" style="width: 16.3rem; border: none;" >
            <img src="{{ asset('servis/img/sparepart.jpg')}}" class="card-img-top w-7 mx-auto mt-3" alt="">
            <p><b>SPAREPART</b></p>
            <br>
          </div>

        </div>
        </div>
      </div>
    </section>

    <!-- Akhir Jasa ---->

<!----------------------------------------------------- Awal order ----------------------------------------------------->
<section id="order" class="d-flex flex-md-row gap-4 justify-content-center " style="padding: 1.5rem; flex-direction: column;">
    <div class=" mt-5 mb-5 mx-2 px-2 pb-4" style="">
        <h2 style="padding-right: 9rem; font-weight: 600; font-size: 50px; padding-top: 6rem ">Servis Motor Anda dengan <span class="text-primary">Cepat</span> dan <span class="text-primary">Berkualitas.</span></h2>
        <p>Sikoteng Servis memberi pelayanan yang berkualitas dan cepat untuk merawat motor kesayangan anda. Pesan
            layanan yang anda inginkan melalui website ini.</p>

            <a class="btn btn-primary text-uppercase text-white" style="font-size: 16px; font-weight: 300; border-radius: 20px; width: 150x;" href="jasa.php">Pesan Sekarang</a>
        </div>

    <img src="{{ asset('servis/img/order1.jpg')}}" />
</section>

    <!-- Akhir order ---->

    <!----------------------------------------------------- Awal Tentang Sikoteng servis ----------------------------------------------------->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Tentang Sikoteng Servis</h2>
    <div class="container mt-5">
    <div class="row">

    <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="{{ asset('servis/img/motorcycle.svg')}}" width="70px">
        <h5 class="mt-3">20+ MOTOR </h5>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="{{ asset('servis/img/customers.svg')}}" width="70px">
        <h5 class="mt-3">20+ PELANGGAN</h5>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="{{ asset('servis/img/rating.svg')}}" width="70px">
        <h5 class="mt-3">20+ TESTIMONI</h5>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="{{ asset('servis/img/montir.svg')}}" width="70px">
        <h5 class="mt-3">1945 MONTIR ANDALAN</h5>
        </div>
    </div>

</div>
</div>
    <!-- Akhir Tentang Sikoteng servis ---->

    <!----------------------------------------------------- Awal Gallery ----------------------------------------------------->

    <div class="gallery text-center">
        <a href="{{ url('/gallery')}}" class="btn btn-primary">cek disini</a>
    </div>

    <!-- Akhir Gallery ---->

    <!----------------------------------------------------- Awal Testimoni ----------------------------------------------------->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimoni</h2>

  <div class="container mt-5">
    <div class=" swiper testimonials">
      <div class="swiper-wrapper d-flex mb-6 ">

        <div class="swiper-slide p-4 gap-4" style="background-color:ghostwhite;">
          <div class="profile d-flex align-items-center mb-3">
            <img src="{{ asset('servis/img/person-circle.svg')}}" width="30px">
            <h6 class="m-0 ms-2">Yusuf Karburator</h6>
          </div>
          <p>
           Bengkel rekomendasi untuk di daerah Dayeuh, orangnya jujur dan amanah dan bisa di percaya.
            Bisa di tinggal klo ga bisa nungguin, untuk harga spare part dan biaya servis lumayan terjangkau.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
{{--
        <div class="swiper-slide p-4" style="background-color:ghostwhite;">
          <div class="profile d-flex align-items-center p-4">
            <img src="{{ asset('servis/img/person-circle.svg')}}" width="30px">
            <h6 class="m-0 ms-2">Ahmad Pertalite</h6>
          </div>
          <p>
            Yang punya bengkel orangnya jujur dan amanah Rekomended banget bagi yang punya motor
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide p-4" style="background-color:ghostwhite;">
          <div class="profile d-flex align-items-center p-4">
            <img src="{{ asset('servis/img/person-circle.svg')}}" width="30px">
            <h6 class="m-0 ms-2">Asep Knalpot</h6>
          </div>
          <p>
            Bengkel langganan, Setiap servis motor selalu disini...
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div> --}}

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
    <!-- Akhir Testimoni ---->


    <!----------------------------------------------------- Awal Contact ----------------------------------------------------->
    <section id="contact" style="margin-top:10%; margin-bottom:2%;">
        <div class="container contactContent">
            <div class="row mt-4">
                <div class="col-lg-6">
                    <h1 class="text-center">Alamat</h1>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.75119403134016!2d107.046964662257!3d-6.519264819648922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1733006877008!5m2!1sid!2sid"style="height:300px; width:100%; border:1px solid #000; margin: 10px 20px 10px 1px;" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a style=" font-weight: bold;"><i class="bi bi-geo-alt-fill"></i>Jl. Raya Jonggol-Dayeuh, Sukanegara, Kec. Jonggol, Kabupaten Bogor, Jawa Barat 16830 </a>
                </div>

                <div class="col-lg-6">
                    <h1 class="text-center">Kontak</h1>
                    <br>
                    <div style="margin-left: 10%">
                        <div class="contact-item" >
                            <a href="https://wa.me/62859106955827/?text=Halo+Saya+ingin+bertanya+lebih+lanjut+tentang+sikoteng+servis" class="fa fa-whatsapp" target="_blank" style="background: #075E54; color: white;"></a>
                            <span class="contact-text">0859106955827</span>
                        </div>
                        <br>
                        <div class="contact-item">
                            <a href="https://www.linkedin.com/in/naufal-alif-656442237/" class="fa fa-linkedin" target="_blank" style="background: #3B5998; color: white;"></a>
                            <span class="contact-text">LinkedIn</span>
                        </div>
                        <br>
                        <div class="contact-item">
                            <a href="https://www.instagram.com/sikoteng1/?next=%2F" target="_blank" class="fa fa-instagram" style="background: #55ACEE; color: white;"></a>
                            <span class="contact-text">Instagram</span>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <br>
            <br>

        </div>
    </section>

    <style>
        .fa {
            padding: 10px;
            font-size: 25px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            margin: 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
        .box{
     border-top-color:#34495E !important;
    }
    </style>
    <!-- Akhir Contact ---->

    <!----------------------------------------------------- Awal Footer ----------------------------------------------------->
    <footer class="bg-primary text-white text-center pb-2">
      <p class="pt-3">Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="#home" class="text-white fw-bold">sikoteng1</a></p>
      <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>Sikoteng Servis</b> All Rights Reserved.
        </div>
    </div>
    </footer>
    <!-- Akhir Footer ---->

    <!-----------------------------------------------------Awal Script ----------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ asset('servis/img/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        function toggleText(id) {
            var textElement = document.getElementById(id);
            if (textElement.style.display === "none" || textElement.style.display === "") {
                textElement.style.display = "block";
                textElement.classList.add("fade-in");
            } else {
                textElement.style.display = "none";
                textElement.classList.remove("fade-in");
            }
        }

        var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false
      }
    });

    var swiper = new Swiper(".testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });

    </script>

    <!-- Akhir Script ---->

  </body>
</html>
