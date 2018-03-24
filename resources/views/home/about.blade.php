<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row" style="padding-top: 25px;">

            <div class="col-6">

                <p class="about-subheading">About</p>

            </div>

            <div class="col-6">

                <p>I'm a multi-disciplinary graphic designer who thrives on concepts and beautiful design.
                    I believe that simple and intelligent ideas are the foundation to creating thought
                    provoking, successful design.</p>

                <p>With experience of working in a design studio and as a client facing designer I am able to
                    develop branding and concepts that are realistic and achievable.</p>

                <p>I have a passion for concepts, typography, layout and identities. I am able to work across
                    all design stages; pitching, concepts, design development, production and artworking.
                    I enjoy creating graphics that can work across multiple platforms. </p>

            </div>

        </div>

        <hr/>

        <div class="row">

            <div class="col-6">

                <p class="about-subheading">Skills</p>

            </div>

            <div class="col-6">

                <p>&#8211; Concept generation</p>
                <p>&#8211; Research and moodboard</p>
                <p>&#8211; Concept generation</p>
                <p>&#8211; Design development</p>
                <p>&#8211; Producing brand guidelines</p>
                <p>&#8211; Artworking</p>
                <p>&#8211; Print and digital</p>
                <p>&#8211; Layout design</p>
                <p>&#8211; Identity design</p>
                <p>&#8211; Presentation design</p>
                <p>&#8211; Collaboration</p>

            </div>

        </div>

        <hr/>

        <div class="row">

            <div class="col-6">

                <p class="about-subheading">Clients</p>

            </div>

            <div class="col-6">

                <div class="row" style="padding-left: 20px;">

                    @foreach($clients as $client)
                        <div style="width: 110px; margin: 3px; background-color: white;">
                            <img class="card-img-top" src="{{ $client['thumbnail_path'] }}" alt="{{ $client['name'] }}">
                        </div>
                    @endforeach

                </div>

            </div>

        </div>

        <hr/>

        <div class="row">

            <div class="col-6">

                <p class="about-subheading">Contact</p>

            </div>

            <div class="col-6">

                <p>I'm always interested to hear about exciting opportunities and projects so please don't hesitate to
                    contact me.</p>

                <p>Phone: +44 (0) 793 048 3336</p>

                <p>Email: <a href="mailto:hello@clairehorne.co.uk?Subject=Hello" style="color: #333333;"
                             target="_top">hello@clairehorne.co.uk</a>
                </p>

            </div>
        </div>

    </div>

@endsection