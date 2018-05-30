<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <div class="container-fluid">

        <div class="row-fluid">

            <br/>

            <div class="wrapper center-block">

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">

                        <div class="border-bottom" style="margin-bottom: 10px;">

                                <div class="row">

                                    <div class="col-xs-1 col-sm-3 col-md-4 col-lg-5">
                                        <h5 class="panel-title about-links">About</h5>


                                    </div>
                                    <div class="panel-body col-xs-11 col-sm-8 col-md-7 col-lg-5">

                                        <p>I'm a multi-disciplinary graphic designer who thrives on concepts and
                                            beautiful design. I believe that simple and intelligent ideas are the
                                            foundation for creating thought-provoking, successful design. I enjoy
                                            creating graphics that work across multiple platforms.</p>

                                        <p>With the experience of working in design studios and as a client facing
                                            designer, I am able to develop designs that are realistic and
                                            achievable.</p>

                                        <p>I have a passion for typography, layout and identities. I am able to work on
                                            all design stages; pitching, concepts, design development, production and
                                            artworking.</p>

                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="border-bottom" style="margin-bottom: 10px;">


                            <div class="panel-heading active" role="tab" id="headingTwo">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                       aria-expanded="true" aria-controls="collapseTwo" class="about-links">Skills</a>
                                    <a style="float: right;">
                                        <i id="chevronTwo" class="indicator fas fa-chevron-down" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseTwo">
                                        </i>
                                    </a>
                                </h5>
                            </div>


                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class='row'>

                                    <div class="col-xs-1 col-sm-3 col-md-4 col-lg-5"></div>
                                    <div class="panel-body col-xs-11 col-sm-8 col-md-7 col-lg-5">

                                        <p>&#8211; Concept generation</p>
                                        <p>&#8211; Research and moodboard generation</p>
                                        <p>&#8211; Design development</p>
                                        <p>&#8211; Creating brand guidelines</p>
                                        <p>&#8211; Artworking</p>
                                        <p>&#8211; Print and digital design</p>
                                        <p>&#8211; Layout design</p>
                                        <p>&#8211; Identity design</p>
                                        <p>&#8211; Presentation design</p>
                                        <p>&#8211; Exhibition design</p>

                                    </div>

                                </div>


                            </div>

                        </div>

                        <div class="border-bottom" style="margin-bottom: 10px;">

                            <div class="panel-heading active" role="tab" id="headingThree">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree"
                                       aria-expanded="true" aria-controls="collapseThree" class="about-links">Clients</a>
                                    <a style="float: right;">
                                        <i id="chevronThree" class="indicator fas fa-chevron-down"
                                           data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseThree">
                                        </i>
                                    </a>
                                </h5>
                            </div>


                            <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-xs-1 col-sm-3 col-md-4 col-lg-5"></div>
                                        <div class="panel-body col-xs-11 col-sm-8 col-md-7 col-lg-5">

                                            @foreach($clients as $client)
                                                <img src="{{ $client['thumbnail_path'] }}"
                                                     style="width: 150px; margin: 3px; margin-top: 6px; background-color: white;"
                                                     alt="{{ $client['name'] }}">
                                            @endforeach

                                        </div>


                                    </div>

                                    <br/>

                                </div>

                            </div>

                        </div>

                        <div class="border-bottom" style="margin-bottom: 10px;">


                            <div class="panel-heading active" role="tab" id="headingFour">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFour"
                                       aria-expanded="true" aria-controls="collapseFour" class="about-links">Contact</a>
                                    <a style="float: right;">
                                        <i id="chevronFour" class="indicator fas fa-chevron-down"
                                           data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseFour">
                                        </i>
                                    </a>
                                </h5>
                            </div>


                            <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingFour">
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-xs-1 col-sm-3 col-md-4 col-lg-5"></div>
                                        <div class="panel-body col-xs-11 col-sm-8 col-md-7 col-lg-5">

                                            <p>Please contact me for a PDF portfolio (this contains projects that I
                                                can't share online).</p>

                                            <p>I'm always interested to hear about exciting opportunities and projects
                                                so don't hesitate to contact me.</p>

                                            <p>Phone: +44 (0) 793 048 3336</p>

                                            <p>Email: <a href="mailto:hello@clairehorne.co.uk?Subject=Hello"
                                                         style="color: #333333;"
                                                         target="_top">hello@clairehorne.co.uk</a>
                                            </p>

                                            <p>CV (PDF):
                                                <a href="/pdf/ClaireHorneCV.pdf" download>
                                                    <i class="far fa-file-pdf fa-2x"></i>
                                                </a>

                                            </p>




                                        </div>
                                    </div>
                                    <br/>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <br/>

    </div>

@endsection