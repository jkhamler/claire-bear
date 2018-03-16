<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <main>
        <div class="container">

            <p>Blah blah blah</p>




        </div>


    </main>

@endsection

