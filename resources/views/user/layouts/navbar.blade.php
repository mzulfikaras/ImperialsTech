<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-md-flex" href="{{route('user.home')}}">
            <img src="{{asset('assets/user/images/logo4.png')}}" width="100" class="img-fluid" alt="">
            <div class="d-none d-md-flex" style="margin-top: 20px">Imperialstech.com</div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @if (request()->routeIs('user.home'))
                <li class="nav-item">
                    <a href="#about" class="nav-link smoothScroll">Studio</a>
                </li>
                <li class="nav-item">
                    <a href="#project" class="nav-link smoothScroll">Our Works</a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{route('user.contact')}}" class="nav-link contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
