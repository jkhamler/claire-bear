<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <div class="container-fluid">


        <div class="row">
            @foreach($projects as $project)

                <div class="card work-card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/haribo.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                    </div>
                </div>

            @endforeach


        </div>
    </div>

@endsection