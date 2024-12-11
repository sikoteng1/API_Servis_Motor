<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-xl fixed-top  ">
    <div class="container">
      <a class="navbar-brand" href="/"><b>SIKOTENG SERVIS</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse px-5" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/"><b>HOME</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./#jasa">LAYANAN KAMI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/jasa">PESAN JASA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./#contact">KONTAK</a>
          </li>

          <li class="nav-item">

            @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                        </li>
                    @endif
                @else
                    @if (auth()->user()->AdminMiddleware)
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                LOGOUT
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endif
                @endauth


          </li>
        </ul>
      </div>
    </div>
  </nav>
