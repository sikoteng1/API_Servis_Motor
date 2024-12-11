<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('servis/style-gallery.css')}}">

    <title>Gallery Motor</title>

</head>

<body>

    <!----------------------------------------------------- Awal Navbar ----------------------------------------------------->

    @include('includes.nav-user')

    <!-- Akhir Navbar ---->

        <!----------------------------------------------------- Awal Testimoni ----------------------------------------------------->
        <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">Gallery Motor Favorit Kami</h2>
    <div class="wrapper">
        <div class="slides">
            <span id="slide-1"></span>
            <span id="slide-2"></span>
            <span id="slide-3"></span>
            <span id="slide-4"></span>
            <div class="images">
                <img src="{{ asset('servis/img/fotoproduk/1.jpg')}}" alt="">
                <img src="{{ asset('servis/img/fotoproduk/2.jpg')}}" alt="">
                <img src="{{ asset('servis/img/fotoproduk/3.jpg')}}" alt="">
                <img src="{{ asset('servis/img/fotoproduk/4.jpg')}}" alt="">
            </div>
        </div>
        <div class="navigation pt-2">
            <a href="#slide-1">1</a>
            <a href="#slide-2">2</a>
            <a href="#slide-3">3</a>
            <a href="#slide-4">4</a>
        </div>
    </div>

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
                                <a href="#" class="fa fa-linkedin" target="_blank" style="background: #3B5998; color: white;"></a>
                                <span class="contact-text">LinkedIn</span>
                            </div>
                            <br>
                            <div class="contact-item">
                                <a href="https://www.instagram.com/sikoteng1/?next=%2F" target="_blank" class="fa fa-instagram" style="background: #55ACEE; color: white;"></a>
                                <span class="contact-text">Instagram</span>
                            </div>
                            <br>
                            <div class="contact-item">
                                <a href="#" class="fa fa-google" target="_blank" style="background: #dd4b39; color: white;"></a>
                                <span class="contact-text">Google</span>
                            </div>
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



        <!-- Akhir Script ---->

</body>

</html>
