<!-- Header -->
<header id="header" class="fixed-top header">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1 class="text-light"><a href="{{ route('home') }}"><span>ASTASHENKOV.RU</span></a></h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto" href="{{ route('home') }}">
                        <i class="fa fa-home"></i>&nbsp;
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('home') }}">Информация</a>
                </li>
                <li class="dropdown"><a href="#"><span>Онлайн уроки</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('home') }}">HTML</a></li>
                        <li><a href="{{ route('home') }}">CSS</a></li>
                        <li><a href="{{ route('home') }}">JavaScript</a></li>
                        <li><a href="{{ route('home') }}">PHP</a></li>
                        {{--
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        --}}
                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('home') }}">Блог</a>
                </li>
                {{--
                <li>
                    <a class="nav-link scrollto" href="#team">Team</a>
                </li>
                --}}
                <li><a class="nav-link scrollto" href="{{ route('home') }}">Контакты</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
<!-- End Header -->
<!-- Hero Section -->
<section id="hero"
    @if (Route::currentRouteName() == 'home')
        style="height: 100vh;"
    @endif
>
    <div class="hero-container" data-aos="fade-up">
        <h1>БЛОГ PHP ПРОГРАММИСТА</h1>
        <h2>HTML, CSS, JavaScript, PHP, Laravel</h2>
        <a href="#about" class="btn-get-started scrollto">
            <i class="bx bx-chevrons-down"></i>
        </a>
    </div>
</section>
<!-- End Hero -->
