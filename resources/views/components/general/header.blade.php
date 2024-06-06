<header class="w-full py-4 border-b-[2px] border-[#8f9399] r">
    <div class="container flex flex-row gap-5 items-center">


        <?echo(Auth::user())?>
        <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>



            @guest
            <div class="ml-auto">
                @if (Route::has('login') )
                    <a  class="customButton" href="{{ route('register') }}">Регистрация</a>
                @endif
                @if (Route::has('register'))
                    <a  class="customButton" href="{{ route('login') }}">Войти</a>
                @endif
            </div>
            @else
            <nav class="flex flex-row gap-3 ml-5">
                <a class="customButton" href="{{route('users')}}">Наши участники</a>
                <a class="customButton" href="{{route('events')}}">События</a>
                <a class="customButton" href="#">Личный кабинет</a>
            </nav>
            <div class="ml-auto">
                <form action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button class="customButton" type="submit" >Выйти</button>
                </form>
            </div>
            @endguest









        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mt-1 w-full"> --}}
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                   {{--  <ul class="navbar-nav ms-auto">

                            <li class="">
                                <a id="navbarDropdown" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> --}}
        {{-- </nav> --}}
    </div>
</header>

