<header>
    <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
    </div>
    <nav class="menu">
        <div class="menu-branding">
            <div class="portrait"></div>
        </div>     
        <ul class="menu-nav">
            <li class="nav-item current">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>                
            <li class="nav-item">
                <a href="{{ url('/about') }}" class="nav-link">About Me</a>
            </li>                
            <li class="nav-item">
                <a href="{{ url('/work') }}" class="nav-link">My work</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/contact') }}" class="nav-link">How to reach me</a>
            </li>
        </ul>        
    </nav>
</header>