<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <div class="container-fluid">

        <div class="row" style="padding: 10px;">

            @foreach($projects as $project)

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="padding: 0px;">

                    <a href="{{ $project['url'] }}">

                        <img src="{{ $project['thumbnail_path'] }}" alt="{{ $project['name'] }}"
                             class="img-fluid" style="padding: 10px;">

                    </a>

                </div>

            @endforeach
        </div>
    </div>

@endsection