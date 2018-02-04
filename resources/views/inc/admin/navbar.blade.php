<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ '' }}">Admin panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            @if(count($adminnav) > 0)
                @foreach($adminnav as $an)
                    <li class="{{ (Request::url() === $an->url) ? 'nav-link active' : 'nav-link' }}" data-toggle="tooltip" data-placement="right" title="{{ $an->name }}">
                        <a class="nav-link" href="{{ asset($an->title) }}">
                            <i class="{{ $an->icon }}"></i>
                            <span class="nav-link-text">{{ $an->name }}</span>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler" href="{{ url('/home') }}">
                    <i class="fa fa-fw fa-angle-left"></i>BACK TO SITE
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                   class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>