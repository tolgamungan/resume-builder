@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <div class="card" style="width: 575px;">
        
        <body>    
            @guest    
                <div class="container">
                    <div class="my-5">
                        <h1 class="center shadow-sm">{{ __('Hi there!') }}</h1><br>
                        <div class="center shadow-sm">
                            <h2>{{ __('Welcome to the') }} <em>Resume-Builder</em></h2>
                        </div>
                        <div class="center my-5">
                            <a class="center" href="{{ url('/index') }}">
                                <div class="btn btn-warning btn-lg "><h3>{{ __('Lets Get Started') }} &#9996;</h3></div>
                            </a>
                        </div>
                    </div>
                </div>    
                <div class="center my-3"><em>{{ __('Would you like to access more advanced stuff') }} &#128640;</em></div>
                <div class="center"> 
                    <a class="btn btn-light btn-lg mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="btn btn-light btn-lg mx-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
                <span class="my-4"></span>
            @else
                <div class="container">
                    <div class="my-5">
                        <h1 class="center shadow-sm">{{ __('Hi') }} {{ Auth::user()->name}}!</h1><br>
                        <div class="center shadow-sm">
                            <h2>{{ __('Welcome to the') }} <em>Resume-Builder</em></h2>
                        </div>
                        <div class="center my-5 ">
                            <a class="center" href="{{ url('/index') }}">
                                <div class="btn btn-warning btn-lg "><h3>{{ __('Lets Get Started') }} &#9996;</h3></div>
                            </a>
                        </div>
                    </div>
                </div>    
                
                <span class="my-4"></span>
            
            @endguest
        </body>

    </div>
</div>


@endsection