@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Rodez Agence d'agent</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="top-right links">
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                    @endif
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <h1 class="card-title">Cibles</h1>
                                <ul>
                                   @foreach($targets as $target)
                                   <li>{{$target->name_target}}</li>
                                   @endforeach
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h1 class="card-title">Missions</h1>
                                <ul>
                                   @foreach($missions as $mission)
                                   <li>{{$mission->name_mission}}</li>
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
