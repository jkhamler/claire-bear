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
                <div class="card-group" style="margin: 10px;">

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top"
                             src="{{ asset('build/images/product_1.2c0c132f.jpeg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project['name'] }}</h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                            <a href="{{ $project['slug'] }}" class="btn btn-primary">Product Page</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection