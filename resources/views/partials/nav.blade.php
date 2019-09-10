<nav id="nav">
    <ul>

        @guest
        <li>
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li>
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('new') }}">New Note</a></li>
        <li>
            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        @endguest
    </ul>
</nav>
