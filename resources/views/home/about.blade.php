<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <div class="container-fluid">

        <div class="col-12">

            <br/>

            <div class="wrapper center-block">

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">

                        <div class="border-bottom" style="margin-bottom: 10px;">

                            <div class="panel-heading active" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">About</a>
                                    <a style="float: right;">
                                        <i id="chevronOne" class="indicator fas fa-chevron-down" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseOne">
                                        </i>
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="row">

                                    <div class="col-5"></div>
                                    <div class="panel-body col-5">

                                        <p>I'm a multi-disciplinary graphic designer who thrives on concepts and
                                            beautiful
                                            design.
                                            I believe that simple and intelligent ideas are the foundation to creating
                                            thought
                                            provoking, successful design.</p>

                                        <p>With experience of working in a design studio and as a client facing designer
                                            I
                                            am able to
                                            develop branding and concepts that are realistic and achievable.</p>

                                        <p>I have a passion for concepts, typography, layout and identities. I am able
                                            to
                                            work across
                                            all design stages; pitching, concepts, design development, production and
                                            artworking.
                                            I enjoy creating graphics that can work across multiple platforms. </p>
                                    </div>
                                </div>


                            </div>


                        </div>

                        <div class="border-bottom" style="margin-bottom: 10px;">


                            <div class="panel-heading active" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                       aria-expanded="true" aria-controls="collapseTwo">Skills</a>
                                    <a style="float: right;">
                                        <i id="chevronTwo" class="indicator fas fa-chevron-down" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseTwo">
                                        </i>
                                    </a>
                                </h4>
                            </div>


                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class='row'>

                                    <div class="col-5">

                                    </div>

                                    <div class="panel-body col-5">

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


                            </div>

                        </div>

                        <div class="border-bottom" style="margin-bottom: 10px;">

                            <div class="panel-heading active" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree"
                                       aria-expanded="true" aria-controls="collapseThree">Clients</a>
                                    <a style="float: right;">
                                        <i id="chevronThree" class="indicator fas fa-chevron-down"
                                           data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseThree">
                                        </i>
                                    </a>
                                </h4>
                            </div>


                            <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-5">

                                        </div>

                                        <div class="col-5">

                                            @foreach($clients as $client)
                                                <img src="{{ $client['thumbnail_path'] }}"
                                                     style="width: 110px; margin: 3px; margin-top: 6px; background-color: white;"
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
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFour"
                                       aria-expanded="true" aria-controls="collapseFour">Contact</a>
                                    <a style="float: right;">
                                        <i id="chevronFour" class="indicator fas fa-chevron-down"
                                           data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseFour">
                                        </i>
                                    </a>
                                </h4>
                            </div>


                            <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingFour">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-5">

                                        </div>

                                        <div class="col-5">

                                            <p>I'm always interested to hear about exciting opportunities and projects
                                                so please
                                                don't hesitate to
                                                contact me.</p>

                                            <p>Phone: +44 (0) 7930 483336</p>

                                            <p>Email: <a href="mailto:hello@clairehorne.co.uk?Subject=Hello"
                                                         style="color: #333333;"
                                                         target="_top">hello@clairehorne.co.uk</a>
                                            </p>
                                        </div>
                                    </div>
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