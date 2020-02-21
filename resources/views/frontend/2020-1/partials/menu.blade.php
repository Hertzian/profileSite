<header>
    <div class="logo">
        <!-- <img src="img/LaloBW_small.jpg" alt="logo"> -->
        <!-- <strong>&lt;/Lalo Aguilar&gt;</strong> -->
    </div>
    <button class="nav-toggle" aria-label="toggle navigation">
        <span class="hamburger"></span>
    </button>
    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="{{ url('/') }}#home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
                <a href="{{ url('/') }}#services" class="nav__link">My experience</a>
            </li>
            <li class="nav__item">
                <a href="{{ url('/') }}#about" class="nav__link">About me</a>
            </li>
            <li class="nav__item">
                <a href="{{ url('/') }}#skills" class="nav__link">Skills</a>
            </li>
            <li class="nav__item">
                <a href="{{ url('/') }}#work" class="nav__link">My work</a>
            </li>
            {{-- <li class="nav__item">
                <a href="{{ url('/resume') }}" class="nav__link">Resume</a>
            </li> --}}
            <li class="nav__item">
                <a href="{{ url('/') }}#contact" class="nav__link">Contact</a>
            </li>
        </ul>
    </nav>
</header>