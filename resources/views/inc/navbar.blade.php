<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand et" href="{{ url('/home') }}">ET</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @if(count($nav) > 0)
                        @foreach($nav as $n)
                          <li class="nav-item ">
                            <a class="{{ (Request::url() === $n->url) ? 'nav-link active' : 'nav-link' }}" href="{{ asset($n->title) }}">{{ $n->name }}</a>
                          </li>
                        @endforeach
                    @endif
                </ul>
                <ul class="navbar-nav mr-right">
                  @if (Auth::guest())
                            <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Login
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ route('login') }}"><button class="dropdown-item" type="button">User login</button></a></li>
                                <li><a href="{{ route('admin.login') }}"><button class="dropdown-item" type="button">Admin login</button></a></li>
                            </div></div>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <button href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item" type="button">Logout</button>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                </div>
                              </div>
                            
                        @endif
                </ul>
              </div>
        </nav>