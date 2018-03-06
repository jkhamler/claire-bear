<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>Work Page.</p>

    <div class="container-fluid">
        <div class="row">
            @foreach($projects as $project)
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="/images/haribo.png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">{{$project['name']}}</h4>
                        <p class="card-text">{{$project['description']}}</p>
                        <a href="{{$project['slug']}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection