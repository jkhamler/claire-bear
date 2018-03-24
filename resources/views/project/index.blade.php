<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <div class="container-fluid" >

        <div class="row" style="padding: 5px; display: flex;">
            @foreach($projects as $project)
                <a href="{{ $project['url'] }}">
                    <div style="width: 450px; margin: 10px;">
                        <img class="card-img-top" src="{{ $project['thumbnail_path'] }}" alt="{{ $project['name'] }}">
                    </div>
                </a>

            @endforeach
        </div>
    </div>



@endsection