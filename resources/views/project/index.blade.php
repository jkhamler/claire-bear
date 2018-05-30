@extends('app')

@section('title', 'Page Title')

@section('content')

    <div class="container-fluid">

        <div class="row">

            @foreach($projects as $project)

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="padding: 0px;">

                    <div class="content">

                        <a href="{{ $project['url'] }}" target="_blank">

                            <div class="content-overlay" style="padding: 100px;"></div>

                            <img class="content-image img-fluid"
                                 src="{{ $project['thumbnail_path'] }}">

                            <div class="content-details">
                                <h5>{{ $project['name'] }}</h5>
                                <h5 style="font-size: smaller">{{ $project['description'] }}</h5>
                            </div>

                        </a>

                    </div>

                </div>

            @endforeach
        </div>
    </div>

@endsection