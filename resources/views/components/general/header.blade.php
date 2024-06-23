<header class="w-full py-4 border-b-[2px] border-[#8f9399] r">
    <div class="container flex flex-row gap-5 items-center">


        <?echo(Auth::user())?>
        <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>



            @guest
            <div class="ml-auto">
                @if (Route::has('login') && (request()->segment(1) =='login' ))
                    <a  class="customButton" href="{{ route('register') }}">Регистрация</a>
                @endif
                @if (Route::has('register') && (request()->segment(1) =='register'))
                    <a  class="customButton" href="{{ route('login') }}">Войти</a>
                @endif
            </div>
            @else
            <nav class="flex flex-row gap-3 ml-5">
                {{-- <a class="customButton {{(request()->segment(1) == 'users') ? 'active' : ''}}" href="{{route('users')}}">Наши участники</a> --}}
                <a class="customButton {{(request()->segment(1) == 'events') ? 'active' : ''}}" href="{{route('events')}}">События</a>
                <a class="customButton {{(request()->segment(1) == 'organizers') ? 'active' : ''}}" href="{{route('organizers')}}">Организаторы</a>
                <a class="customButton" href="{{route('locations')}}">Полигоны</a>
                <a class="customButton" href="{{route('mechanics')}}">механики</a>

            </nav>
            <div class="ml-auto relative">
                <button class="header-menu js-header-menu" title="Личный кабинет">
                    <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 16.9 16.9" style="enable-background:new 0 0 16.9 16.9;" xml:space="preserve">
                    <g>
                        <path class="people" d="M12,9.2c-0.5-0.5-1.2-1-1.9-1.2c1.3-0.9,1.7-2.7,0.8-4.1C10,2.6,8.1,2.3,6.8,3.2
                            S5.2,5.9,6.1,7.2C6.3,7.5,6.5,7.8,6.8,8c-2,0.7-3.4,2.6-3.4,4.8h0.8c0-2.3,1.9-4.2,4.2-4.2s4.2,1.9,4.2,4.2h0.8
                            C13.5,11.4,13,10.1,12,9.2z M8.5,7.7c-1.2,0-2.1-0.9-2.1-2.1c0-1.2,0.9-2.1,2.1-2.1c1.2,0,2.1,0.9,2.1,2.1c0,0,0,0,0,0
                            C10.6,6.8,9.6,7.7,8.5,7.7L8.5,7.7z"/>
                        <g>
                          <path class="round"  d="M8.5,16.4c-4.4,0-8-3.6-8-8c0-4.4,3.6-8,8-8s8,3.6,8,8C16.4,12.9,12.9,16.4,8.5,16.4z M8.5,1.2
                              c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3C15.7,4.5,12.5,1.2,8.5,1.2z"/>
                        </g>
                    </g>
                    </svg>

                </button>
                <div class=" rounded-xl   absolute flex flex-col gap-2 right-0 top-[100%] w-[150px] bg-white overflow-hidden max-h-0 js-header-lk-menu">
                  <div class="p-2 border w-[150px] flex flex-col items-end gap-2">
                      {{-- <a href="{{route('lk')}}">Личный кабинет </a> --}}
                      {{-- <a href="{{route('editlk')}}">Редактировать данные</a> --}}
                      <form action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <button class="" type="submit" >Выйти</button>
                    </form>
                  </div>
                </div>
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

