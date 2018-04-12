@extends('app')

@section('title', 'Page Title')

@section('content')

    <div class="container-fluid">

        <div class="row" style="padding: 10px;">

            @foreach($projects as $project)

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="padding: 0px;">

                    <div class="content">

                        <a href="{{ $project['url'] }}" target="_blank">

                            <div class="content-overlay"></div>

                            <img class="content-image img-fluid"
                                 src="{{ $project['thumbnail_path'] }}" style="padding: 10px;">

                            <div class="content-details fadeIn-bottom">
                                <h4 class="content-title">{{ $project['name'] }}</h4>
                                <h5 class="content-text">{{ $project['description'] }}</h5>
                            </div>

                        </a>

                    </div>

                </div>

            @endforeach
        </div>
    </div>

@endsection