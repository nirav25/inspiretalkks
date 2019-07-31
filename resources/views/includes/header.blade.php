<nav class="navbar navbar-expand navbar-dark bg-primary">
    @auth
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    @endauth
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name') }}
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-user"></i>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fa fa-user-plus"></i>
                            {{ __('add admin') }} <span class="caret"></span>
                        </a>
                    </li>
                @endif
            @endauth
        </ul>
    </div>
</nav>