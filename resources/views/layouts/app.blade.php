<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BLOG') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-header bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <!-- {{ config('app.name', 'BLOG') }}-->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li ><a class="font-weight-bold text-light" href="{{route('blog')}}">MEU BLOGG</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <!-- Navigation Menu -->
                            @if (Auth::user()->permission == 'ADMIN')
                                <li class="nav-item"><a class="nav-link" href="{{ route('tags.index') }}">Tags</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categorias</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Usuários</a></li>
                            @endif
                            
                            <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Artigos</a></li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                     <td>
                                    <a class="dropdown-item" href="{{action('UserController@edit', Auth::user()->id)}}" class="btn btn-sm btn-outline-secondary">Meus dados</a>
                                  </td>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
            @if (session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                                <div class="alert alert-success">
                                    {{ session('info') }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif

            <!--Alert messages-->
            @if (count($errors))
            <div class="container py-4">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
                
            @endif

            @yield('content')
        </main>
    </div>

</body>
</html>
