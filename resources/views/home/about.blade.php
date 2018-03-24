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

                <p>I'm a multi-disciplinary graphic designer who thrives on concepts and beautiful design.
                    I believe that simple and intelligent ideas are the foundation to creating thought
                    provoking, successful design.</p>

            </div>

        </div>

        <hr/>

        <div class="row">

            <div class="col-6">

                <p class="about-subheading">Clients</p>

            </div>

            <div class="col-6">

                <div class="row" style="padding-left: 20px;">


                    <div style="width: 70px; margin: 3px;">
                        <img class="card-img-top" src="/images/thumbnails/Allude.jpg" alt="Allude">
                    </div>

                    <div style="width: 70px; margin: 3px;">
                        <img class="card-img-top" src="/images/thumbnails/Allude.jpg" alt="Allude">
                    </div>

                    <div style="width: 70px; margin: 3px;">
                        <img class="card-img-top" src="/images/thumbnails/Allude.jpg" alt="Allude">
                    </div>

                    <div style="width: 70px; margin: 3px;">
                        <img class="card-img-top" src="/images/thumbnails/Allude.jpg" alt="Allude">
                    </div>

                    <div style="width: 70px; margin: 3px;">
                        <img class="card-img-top" src="/images/thumbnails/Allude.jpg" alt="Allude">
                    </div>

                    <div style="width: 70px; margin: 3px;">
                        <img class="card-img-top" src="/images/thumbnails/Allude.jpg" alt="Allude">
                    </div>

                    <div style="width: 70px; margin: 3px;">
                        <img class="card-img-top" src="/images/thumbnails/Allude.jpg" alt="Allude">
                    </div>

                    <div style="width: 70px; margin: 3px;">
                        <img class="card-img-top" src="/images/thumbnails/Allude.jpg" alt="Allude">
                    </div>


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