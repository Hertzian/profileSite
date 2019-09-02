<header>
    <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
    </div>
    <nav class="menu">
        <div class="menu-branding">
            <div class="portrait" style="background: url('storage/img/{{  $photo }}');"></div>
        </div>     
        <ul class="menu-nav">
            {{-- <li class="nav-item @if(Request::path() == '/') current @endif">
                <a href="{{ url('/') }}" class="nav-link">{{ Request::path() }}</a>
            </li>                 --}}
            <li class="nav-item @if(Request::path() == '/') current @endif">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>                
            <li class="nav-item @if(Request::path() == 'about') current @endif">
                <a href="{{ url('/about') }}" class="nav-link">About Me</a>
            </li>                
            <li class="nav-item @if(Request::path() == 'work') current @endif">
                <a href="{{ url('/work') }}" class="nav-link">My work</a>
            </li>
            <li class="nav-item @if(Request::path() == 'contact') current @endif">
                <a href="{{ url('/contact') }}" class="nav-link">How to reach me</a>
            </li>
        </ul>        
    </nav>
</header>